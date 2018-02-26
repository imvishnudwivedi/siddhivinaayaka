<?php

namespace App\Http\Controllers\prok\masters;

use Illuminate\Http\Request;
use App\Models\masters\HomeSlider;
use App\Models\masters\Keyword;
use App\Models\masters\ItemKeywords;

use App\Models\Notification;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use Input;

class HomeSliderController extends Controller
{



  public function index()
  {

    $home_slider=DB::table('home_slider as i')
    ->join('users AS u','i.created_by','=','u.id')
    ->leftjoin('users AS u1','i.updated_by','=','u1.id')
    
    ->select('i.*','u1.name as created_by','u1.name as updated_by')
    ->orderBy('i.id','ASC')
    ->get();



   
    return view('prok.masters.home_slider.index')->with('home_slider',$home_slider);
  }






  public function create(Request $request)
    {

   

       return view('prok.masters.home_slider.create');

    }



       public function uploadSlider(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'prok/image/home_slider/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getSliderUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }


     public function uploadSliderImage(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'prok/image/home_slider/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getSliderUploadedTmpPath($path);

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
       



   
        $file = $request->file('file_name');
      // dd($file);
        if($file){
        $FilePath = 'prok/image/home_slider/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['attachment']=$path;
        // $tmpFilePath = 'prok/images/tmp/';

        // unlink($path);


  
}

        $home_slider=HomeSlider::create($request->all());








         return redirect()->route('prok.masters.home_slider.index')->with('message','Successfully Added')->with('er_type','success');
     
    }

    public function show($id)
    {


      
        $home_slider=DB::table('home_slider as i')
        ->select('i.*')
        ->where('i.id',$id)
        ->first();

       

        return view('prok.masters.home_slider.show')->with('home_slider',$home_slider);
    }


    public function edit($id)
    {


        $home_slider=DB::table('home_slider as i')
        ->select('i.*')
        ->where('i.id',$id)
        ->first();

  if($home_slider){

        return view('prok.masters.home_slider.edit')->with('home_slider',$home_slider);
    }else{

        return view('prok.masters.home_slider.index')->with('message','Cannot Edit Deactivated Details')->with('er_type','danger');


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
      $home_slider=HomeSlider::where('id', '=', $request->id)->first();
          $request['updated_by']=Auth::user()->id;
        
        
         $file = $request->file('file_name');
     if($file){
        $FilePath = 'prok/image/home_slider/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['attachment']=$path;
       }


          $home_slider->update($request->all());


          return redirect()->route('prok.masters.home_slider.index')->with('message','Updated successfully')->with('er_type','success');
        
   
    }

  public function deactivate($id)
    {
     $home_slider=HomeSlider::where('id', '=', $id)->first();
     if($home_slider){
      $home_slider->delete();

    

      return redirect()->route('prok.masters.home_slider.index')->with('message','Successfully deactivated')->with('er_type','danger');
    }else{
      $home_slider=HomeSlider::onlyTrashed()->where('id', '=', $id)->first();
      $home_slider->restore();

       

      return redirect()->route('prok.masters.home_slider.index')->with('message','Successfully activated')->with('er_type','success ');
    }
  }
    


  }
