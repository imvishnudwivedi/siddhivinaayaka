<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\Masters\Employee;
use App\Models\event\Event;
use App\Models\schedule\RecurringEvent;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use Response;
use App\Models\Activity;
use App\Models\AccessLog;

class EventController  extends Controller
{
    public function __construct(){
        // (new Activity)->updateReadFlagOnServiceVisit('event');
    // (new AccessLog)->updateOnPageVisit(Auth::user()->id,Auth::user()->firstname." visited"." - "." Event");
    }
    
    public function index()
    {
        $user_id=1;

        $temp_event=Event::get();
        
        $events=array();
        foreach ($temp_event as $key => $te) {
         // $te['format_from_time']=date("h:i a", strtotime($te->from_date));
         // $te['format_to_time']=date("h:i a", strtotime($te->to_date));

          $te['format_from_time']='';
         $te['format_to_time']='';

         $te['event_from_date_time']=date("Y-m-d", strtotime($te->from_date));
         $te['event_to_date_time']=date("Y-m-d", strtotime($te->to_date));

          $events[]=$te->toArray();
        }
        // dd($events);

        return view('website.calendar')->with('events',$events)->with('today_date',date('Y-m-d'));
    }

    

    function deleteCalendarEvents(Request $request){
    Event::where('id',$request->id)->forceDelete();
   return 1;
    }
    function moveCalendarEvents(Request $request){
   $from_date_time=date("Y-m-d H:i:s", strtotime($request->from_date_time));
   $to_date_time=date("Y-m-d H:i:s", strtotime($request->to_date_time));

    Event::where('id',$request->id)->update(['from_date'=>$from_date_time,'to_date'=>$to_date_time]);
   return 1;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recurring_events=RecurringEvent::all();

        foreach ($recurring_events as $re) {
            $re_employees='';
            $employees=unserialize($re->employee_ids);
            foreach ($employees as $key => $e) {
               $temp=Employee::select(DB::raw('concat (first_name," ",last_name) as employee_name'))->where('id',$e)->first();
               $re_employees.=$temp['employee_name'];
               if(count($employees)-1 > $key){
                $re_employees.=', ';
               }
            }
            $re->employees=$re_employees;
            $re->from_time=date('H:i',strtotime($re->from_date_time));
            $re->to_time=date('H:i',strtotime($re->to_date_time));
        }

        return Response::json($recurring_events);
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $employee_ids=array();
    $employee_ids[]=Auth::user()->employee_id;
    foreach ($request->employee_ids as $key => $e) {
       $employee_ids[]=$e;
    }
    $from_date_time=date('Y-m-d').' '.date("H:i", strtotime($request->from_time));
    $to_date_time=date("Y-m-d", strtotime($request->to_date)).' '.date("H:i", strtotime($request->to_time));
// dd($request->all());
      $request['created_by']=Auth::user()->id;
      $request['employee_ids']=serialize($employee_ids); 
      $request['from_date_time']=date("Y-m-d H:i:s", strtotime($from_date_time)); 
      $request['to_date_time']=date("Y-m-d H:i:s", strtotime($to_date_time));  
      $request['yearly_date']=date("Y-m-d", strtotime($request->yearly_date));  

      $recurring_event=RecurringEvent::create($request->all());

      $activity=array();
        $activity['remarks']=Auth::user()->firstname ." added Calendar Recurring Event.";
        $activity['source']="event";
        $activity['destination']="event";
        $activity['action']="create";
        $activity['read_flag']=0;
        $activity['class']="success";
        $activity['action_url']="/iaudit/schedule/event";

        (new Activity)->storeNotification($activity);

        $event_array=array();

        $event_array['recurring_event_id']=$recurring_event->id;
        $event_array['type']=$recurring_event->type;
        $event_array['to_date_time']=$recurring_event->to_date_time;
        $event_array['subject']=$recurring_event->subject;
        $event_array['description']=$recurring_event->description;
        $event_array['employee_ids']=$recurring_event->employee_ids;
        $event_array['tag_color']=$recurring_event->tag_color;
        $event_array['created_by']=Auth::user()->id;

        if($request->recurring_type == 1){
            for($i=0;$i<90;$i++){
                $event_array['from_date_time']=date('Y-m-d', strtotime("+".$i." days")).' '.date("H:i", strtotime($request->from_time));
                Event::create($event_array);

                $activity=array();
                $activity['remarks']=Auth::user()->firstname ." added Calendar Event.";
                $activity['source']="event";
                $activity['destination']="event";
                $activity['action']="create";
                $activity['read_flag']=0;
                $activity['class']="success";
                $activity['action_url']="/iaudit/schedule/event";

                (new Activity)->storeNotification($activity);
            }
        }

        if($request->recurring_type == 2){
            for($i=0;$i<90;$i++){
                $temp_date=date('Y-m-d', strtotime("+".$i." days"));
                if((date("w", strtotime($temp_date))+1) == $request->week_day){
                    $event_array['from_date_time']=$temp_date.' '.date("H:i", strtotime($request->from_time));
                    Event::create($event_array);

                    $activity=array();
                    $activity['remarks']=Auth::user()->firstname ." added Calendar Event.";
                    $activity['source']="event";
                    $activity['destination']="event";
                    $activity['action']="create";
                    $activity['read_flag']=0;
                    $activity['class']="success";
                    $activity['action_url']="/iaudit/schedule/event";

                    (new Activity)->storeNotification($activity);
                }
            }
        }

        if($request->recurring_type == 3){
            for($i=0;$i<90;$i++){
                $temp_date=date('Y-m-d', strtotime("+".$i." days"));
                if((date("d", strtotime($temp_date))) == $request->month_day){
                    $event_array['from_date_time']=$temp_date.' '.date("H:i", strtotime($request->from_time));
                    Event::create($event_array);

                    $activity=array();
                    $activity['remarks']=Auth::user()->firstname ." added Calendar Event.";
                    $activity['source']="event";
                    $activity['destination']="event";
                    $activity['action']="create";
                    $activity['read_flag']=0;
                    $activity['class']="success";
                    $activity['action_url']="/iaudit/schedule/event";

                    (new Activity)->storeNotification($activity);
                }
            }
        }

        if($request->recurring_type == 4){
            for($i=0;$i<90;$i++){
                $temp_date=date('Y-m-d', strtotime("+".$i." days"));
                $quarter_date=getQuarterDate($temp_date,$request->quarter_month,$request->month_day);
                if(strtotime($temp_date) == strtotime($quarter_date)){
                    $event_array['from_date_time']=$temp_date.' '.date("H:i", strtotime($request->from_time));
                    Event::create($event_array);

                    $activity=array();
                    $activity['remarks']=Auth::user()->firstname ." added Calendar Event.";
                    $activity['source']="event";
                    $activity['destination']="event";
                    $activity['action']="create";
                    $activity['read_flag']=0;
                    $activity['class']="success";
                    $activity['action_url']="/iaudit/schedule/event";

                    (new Activity)->storeNotification($activity);
                }
            }
        }

        if($request->recurring_type == 5){
            for($i=0;$i<90;$i++){
                $temp_date=date('Y-m-d', strtotime("+".$i." days"));
                if(date('m', strtotime($temp_date)) == date('m', strtotime($request->yearly_date)) && date('d', strtotime($temp_date)) == date('d', strtotime($request->yearly_date))){
                    $event_array['from_date_time']=$temp_date.' '.date("H:i", strtotime($request->from_time));
                    Event::create($event_array);

                    $activity=array();
                    $activity['remarks']=Auth::user()->firstname ." added Calendar Event.";
                    $activity['source']="event";
                    $activity['destination']="event";
                    $activity['action']="create";
                    $activity['read_flag']=0;
                    $activity['class']="success";
                    $activity['action_url']="/iaudit/schedule/event";

                    (new Activity)->storeNotification($activity);
                }
            }
        }

     // dd($request->all());


        return Response::json(1);
    }

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        // dd($checklist_header);        
        return view('iaudit.Masters.checklist.show')->with('checklist',$checklist)->with('checklist_item',$checklist_item)->with('checklist_header',$checklist_header);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $checklist=DB::table('checklists as c')
        ->join('services as su','c.sub_service_id','=','su.id')
        ->select('c.*','su.service_name')
        ->where('c.id',$id)
        ->where('c.deleted_at','=',null)
        ->first();

        $checklist_header=ChecklistItem::where('checklist_id',$id)->select('checklist_header','checklist_id','id')->groupBy('checklist_header')->get();

        $checklist_item=ChecklistItem::where('checklist_id',$id)->get();

        // dd($checklist_item->toArray());

        if($checklist){
            return view('iaudit.Masters.checklist.edit')->with('checklist',$checklist)->with('checklist_item',$checklist_item)->with('checklist_header',$checklist_header);
        }else{

            return redirect()->route('iaudit.masters.checklist.index')->with('message','Cannot Edit Deactivated checklist')->with('er_type','danger');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        $sub_service=Checklist::where('id', '=', $id)->first();
        $request['updated_by']=Auth::user()->id;
        $sub_service->update($request->all());
        return redirect()->route('iaudit.Masters.checklist.index')->with('message','Successfully Updated')->with('er_type','success');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function deleteRecurringEvent(Request $request)
    {
        RecurringEvent::where('id',$request->id)->forceDelete();
        Event::where(DB::raw('DATE(from_date_time)'),'>',date('Y-m-d'))->where('recurring_event_id',$request->id)->forceDelete();
        return 1;
  }
}

function getQuarterDate($temp_date,$quarter_month,$month_day){
    $fq=['01','02','03'];
    $sq=['04','05','06'];
    $tq=['07','08','09'];
    $frq=['10','11','12'];

    $quarter=ceil(date('n', strtotime($temp_date)) / 3);

    if($quarter == 1){
        return date('Y', strtotime($temp_date)).'-'.$fq[$quarter_month-1].'-'.$month_day;
    }

    if($quarter == 2){
        return date('Y', strtotime($temp_date)).'-'.$sq[$quarter_month-1].'-'.$month_day;
    }

    if($quarter == 3){
        return date('Y', strtotime($temp_date)).'-'.$tq[$quarter_month-1].'-'.$month_day;
    }

    if($quarter == 4){
        return date('Y', strtotime($temp_date)).'-'.$frq[$quarter_month-1].'-'.$month_day;
    }

}
