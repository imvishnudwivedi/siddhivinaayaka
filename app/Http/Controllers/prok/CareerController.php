<?php

namespace App\Http\Controllers\prok;

use Illuminate\Http\Request;
use App\Http\Requests\CareerRequest;
use App\Models\Career\CareerModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Redirect;
use Auth;
use view;
 
class CareerController extends Controller
{
    
    public function index()
    {
      $career=DB::table('career_master AS a')
          ->join('users AS u','a.created_by','=','u.id')
          ->leftjoin('users AS u1','a.updated_by','=','u1.id')
          ->select('a.*','u.name AS created_by','u1.name AS updated_by')
          ->get();
          return view('prok.Career.index')->with('career',$career);   
    }

    
    public function create()
    {
         $career=careerModel::withTrashed()->orderBy('id','DESC')->paginate(env('PAGE_SIZE',10));

          return view('prok.Career.create')->with('career',$career);
    
    }

   
  public function store(CareerRequest $request)
  {
         // dd( $request->all());
    $career = new CareerModel;
    $career->career_heading=$request->career_heading;
    $career->expr_required=$request->expr_required;
    $career->domain=$request->domain;
 
    $career->career_description=$request->career_description;
    $career->created_by=Auth::user()->id;

      
        $career->save();
       return redirect()->route('prok.career.index')->with('message','Successfully Added')->with('er_type','success'); 
    }

   
     public function show($id)
    {
        $career=CareerModel::where('id',$id)->first();
        
         
       
    if($career){
      return view('prok.Career.show')->with('career',$career);
    }else{
        $career=CareerModel::onlyTrashed()->where('id', '=', $id)->first();
      return view('prok.Career.show')->with('career',$career);
    }
    }

    
   public function edit($id)
    {
      //  
         $career=CareerModel::where('id',$id)->first();
    
    if($career){
      return view('prok.Career.edit')->with('career',$career);
    
    }else{

     return redirect()->route('prok.career.index')->with('message','Cannot Edit Deactivated Career')->with('er_type','danger');
    }
    }

     
    public function update(CareerRequest $request, $id)
    {
         // dd($request->all());
        $career=CareerModel::where('id', '=', $id)->first();
      $career->career_heading=$request->career_heading;
    $career->expr_required=$request->expr_required;
     $career->domain=$request->domain;
  
    $career->career_description=$request->career_description;
        $career->updated_by=Auth::user()->id;
    
       if(!$career->isDirty()){
            return redirect()->route('prok.career.index');
        }
        $career->save();
       return redirect()->route('prok.career.index')->with('message','Successfully Updated')->with('er_type','success'); 
           }

   
    public function destroy($id)
    {
        //
    }



    public function deactivate($id)
    {
         $career=CareerModel::where('id', '=', $id)->first();
        if($career){
          $career->delete();
          return redirect()->route('prok.career.index')->with('message','Successfully deactivated')->with('er_type','danger');
        }else{
          $career=CareerModel::onlyTrashed()->where('id', '=', $id)->first();
          $career->restore();
          return redirect()->route('prok.career.index')->with('message','Successfully activated')->with('er_type','success ');
        }
    }
}
