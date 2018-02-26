<?php

namespace App\Http\Controllers\prok\masters;

use Illuminate\Http\Request;
use App\Models\masters\SubCategory;
use App\Models\masters\Category;


use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use Input;

class SubCategoryController extends Controller
{



  public function index()
  {

    $sub_category=DB::table('sub_category as i')
    ->join('category AS c','c.id','=','i.category_id')

    ->join('users AS u','i.created_by','=','u.id')
    ->leftjoin('users AS u1','i.updated_by','=','u1.id')
    
    ->select('i.*','c.name as category_name','u1.name as created_by','u1.name as updated_by')
    ->orderBy('i.id','ASC')
    ->get();



   
    return view('prok.masters.sub_category.index')->with('sub_category',$sub_category);
  }






  public function create(Request $request)
    {

   
      $category=Category::where('deleted_at','=',NULL)->get();

       return view('prok.masters.sub_category.create')->with('category',$category);

    }



       public function uploadSubCategory(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'prok/image/sub_category/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getSubCategoryUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }


     public function uploadSubCategoryImage(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'prok/image/sub_category/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getSubCategoryUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }

 public function deleteTempImage(Request $request)
    {
      $temp_path='prok/image/temp/'.$request->path;
      unlink($temp_path);
      return response()->json(1);
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
        $request['created_by']=Auth::user()->id;
       



   
        $sub_category=SubCategory::create($request->all());



        $file = $request->file('file_name');
      // dd($file);
        if($file){
        $FilePath = 'prok/image/sub_category/'.$sub_category->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['attachment_path']=$path;
        // $tmpFilePath = 'prok/images/tmp/';

        // unlink($path);
       }

          $sub_category->update($request->all());





         return redirect()->route('prok.masters.sub_category.index')->with('message','Successfully Added')->with('er_type','success');
     
    }

    public function show($id)
    {


      
        $sub_category=DB::table('sub_category as i')
      ->join('category AS c','c.id','=','i.category_id')

        ->select('i.*','c.name as category_name')
        ->where('i.id',$id)
        ->first();

       

        return view('prok.masters.sub_category.show')->with('sub_category',$sub_category);
    }


    public function edit($id)
    {


        $sub_category=DB::table('sub_category as i')

        ->select('i.*')
        ->where('i.id',$id)
        ->first();

      $category=Category::where('deleted_at','=',NULL)->get();


// dd($sub_category);

  if($sub_category){
        return view('prok.masters.sub_category.edit')->with('sub_category',$sub_category)->with('category',$category);
   

    }else{
        
         return redirect()->route('prok.masters.sub_category.index')->with('message','Cannot Edit Deactivated Details')->with('er_type','danger');
       }
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      // dd($request->all());
      $sub_category=SubCategory::where('id', '=', $request->id)->first();
          $request['updated_by']=Auth::user()->id;
        
        
         $file = $request->file('file_name');
     if($file){
        $FilePath = 'prok/image/sub_category/'.$sub_category->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['attachment_path']=$path;
       }


          $sub_category->update($request->all());


          return redirect()->route('prok.masters.sub_category.index')->with('message','Updated successfully')->with('er_type','success');
        
   
    }



   public function deactivate($id)
    {
     $sub_category=SubCategory::where('id', '=', $id)->first();
     if($sub_category){
      $sub_category->delete();

    

      return redirect()->route('prok.masters.sub_category.index')->with('message','Successfully deactivated')->with('er_type','danger');
    }else{
      $sub_category=SubCategory::onlyTrashed()->where('id', '=', $id)->first();
      $sub_category->restore();

       

      return redirect()->route('prok.masters.sub_category.index')->with('message','Successfully activated')->with('er_type','success ');
    }
  }


    


  }
