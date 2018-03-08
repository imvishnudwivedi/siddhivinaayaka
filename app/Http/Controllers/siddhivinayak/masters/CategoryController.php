<?php

namespace App\Http\Controllers\siddhivinayak\masters;

use Illuminate\Http\Request;
use App\Models\masters\Category;
use App\Models\Notification;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;

class CategoryController extends Controller
{


  
  public function index()
  {


    $category=DB::table('category as ct')

    ->join('users AS u','ct.created_by','=','u.id')
        ->leftjoin('users AS u1','ct.updated_by','=','u1.id')
        ->select('ct.*','u1.name as created_by','u1.name as updated_by')
        ->orderby('ct.id','DESC')
        ->get();
    



    return view('siddhivinayak.masters.category.index')->with('category',$category);
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
      $check_category=DB::table('category')
      ->where('name','=',$request->name)
      ->first();

    // dd($check_category);

      if($check_category){

        return response()->json(1);

      }else{

        $request['created_by']=Auth::user()->id;
        $request['updated_by']=Auth::user()->id;
        $category=Category::create($request->all());



        return response()->json(array('category'=>$category));  
      }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request)
    {
      $category=Category::where('id', '=', $request->id)->first();

      
      if($category){

        $check_category=DB::table('category')
        ->where('name','=',$request->name)
        ->where('id','!=',$request->id)
        ->first();
           
           

        if($check_category){

          return response()->json(1);

        }else{

          $request['updated_by']=Auth::user()->id;
          $request['name']=$request->name;
          $request['description']=$request->description;
         
          $category->update($request->all());



          return redirect()->route('siddhivinayak.masters.category.index')->with('message','Category Updated successfully')->with('er_type','success');
        }
      }
    }


    public function deactivate($id)
    {
        $category=Category::where('id', '=', $id)->first();
        if($category){
            $category->delete();
    
  

            return redirect()->route('siddhivinayak.masters.category.index')->with('message','Category Deactivated Successfully')->with('er_type','error');
        }else{
            $category=Category::onlyTrashed()->where('id', '=', $id)->first();
            $category->restore();


            return redirect()->route('siddhivinayak.masters.category.index')->with('message','Category Activated Successfully')->with('er_type','success');
        }
    }






  }
