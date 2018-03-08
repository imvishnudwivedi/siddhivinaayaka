<?php

namespace App\Http\Controllers\siddhivinayak\masters;

use Illuminate\Http\Request;
use App\Models\event\Event;



use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use Input;

class EventsController extends Controller
{



  public function index()
  {

    $events=DB::table('events as ev') 
    ->select('ev.*')
    ->orderBy('ev.id','ASC')
    ->get();


    return view('siddhivinayak.masters.events.index')->with('events',$events);
  }



  public function create(Request $request)
  {


   return view('siddhivinayak.masters.events.create');

 }

    public function store(Request $request)
    {

      // dd($request->all());
      $request['created_by']=Auth::user()->id; 

      $request['from_date']=date('Y-m-d',strtotime($request->from_date));
      $request['to_date']=date('Y-m-d',strtotime($request->to_date));
      $events=Event::create($request->all());

      return redirect()->route('siddhivinayak.masters.events.index')->with('message','Successfully Added')->with('er_type','success');

    }

    public function edit($id)
    {
      $events=DB::table('events as ev')
      ->select('ev.*')
      ->where('ev.id',$id)
      ->first();

      if($events){

        return view('siddhivinayak.masters.events.edit')->with('events',$events);
      }else{

        return view('siddhivinayak.masters.events.index')->with('message','Cannot Edit Deactivated Event')->with('er_type','danger');
         }
    }

   
    public function update(Request $request)
    {

      // dd($request->all());
      $events=Event::where('id', '=', $request->id)->first();
      $request['from_date']=date('Y-m-d',strtotime($request->from_date));
      $request['to_date']=date('Y-m-d',strtotime($request->to_date));
      $request['updated_by']=Auth::user()->id;


      $events->update($request->all());


      return redirect()->route('siddhivinayak.masters.events.index')->with('message','Updated successfully')->with('er_type','success');


    }



    public function deactivate($id)
    {
     $events=Event::where('id', '=', $id)->first();
     if($events){
      $events->delete();



      return redirect()->route('siddhivinayak.masters.events.index')->with('message','Successfully deactivated')->with('er_type','danger');
    }else{
      $events=Event::onlyTrashed()->where('id', '=', $id)->first();
      $events->restore();



      return redirect()->route('siddhivinayak.masters.events.index')->with('message','Successfully activated')->with('er_type','success ');
    }
  }



}
