<?php

namespace App\Http\Controllers\siddhivinayak\masters;

use Illuminate\Http\Request;
use App\Models\masters\Gallery;
use App\Models\masters\Folder;


use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use Input;

class GalleryController extends Controller
{



  public function index()
  {

    $gallery=DB::table('galleries as i')
    ->join('folders AS c','c.id','=','i.folder_id')

    ->join('users AS u','i.created_by','=','u.id')
    ->leftjoin('users AS u1','i.updated_by','=','u1.id')
    
    ->select('i.*','c.folder_name as folder_name','u1.name as created_by','u1.name as updated_by')
    ->orderBy('i.id','ASC')
    ->get();



   
    return view('siddhivinayak.masters.gallery.index')->with('gallery',$gallery);
  }






  public function create(Request $request)
    {

   
      $folder=Folder::where('deleted_at','=',NULL)->get();

       return view('siddhivinayak.masters.gallery.create')->with('folder',$folder);

    }



       public function uploadGallery(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'siddhivinayak/image/gallery/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getGalleryUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }


     public function uploadGalleryImage(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'siddhivinayak/image/gallery/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getGalleryUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }

     public function pushgallery($id)
    {
        // dd($id);
      $gallery=DB::table('galleries as op')
          ->select('op.*')
          ->where('op.id','=',$id)
          ->first();
     
        if($gallery->push_pull_flag == 0){
            DB::table('galleries')->where('id',$id)->update(['push_pull_flag' => 1]);

            return redirect()->route('siddhivinayak.masters.gallery.index')->with('message','Successfully pushed to website')->with('er_type','success');
           
        }else{
          DB::table('galleries')->where('id',$id)->update(['push_pull_flag' => 0]);

          return redirect()->route('siddhivinayak.masters.gallery.index')->with('message','Successfully pulled from website')->with('er_type','success');
        }
    }


 public function deleteTempImage(Request $request)
    {
      $temp_path='siddhivinayak/image/temp/'.$request->path;
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
        $request['push_pull_flag']=1;
       



   
        $gallery=Gallery::create($request->all());



        $file = $request->file('file_name');
      // dd($file);
        if($file){
        $FilePath = 'siddhivinayak/image/gallery/'.$gallery->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['gallery_display_attachment']=$path;
        // $tmpFilePath = 'siddhivinayak/images/tmp/';

        // unlink($path);
       }

          $gallery->update($request->all());





         return redirect()->route('siddhivinayak.masters.gallery.index')->with('message','Successfully Added')->with('er_type','success');
     
    }

    // public function show($id)
    // {


      
    //     $sub_category=DB::table('sub_category as i')
    //   ->join('category AS c','c.id','=','i.category_id')

    //     ->select('i.*','c.name as category_name')
    //     ->where('i.id',$id)
    //     ->first();

       

    //     return view('siddhivinayak.masters.sub_category.show')->with('sub_category',$sub_category);
    // }


    public function edit($id)
    {


        $gallery=DB::table('galleries as i')

        ->select('i.*')
        ->where('i.id',$id)
        ->first();

      $folder=Folder::where('deleted_at','=',NULL)->get();


// dd($sub_folder);

  if($gallery){
        return view('siddhivinayak.masters.gallery.edit')->with('gallery',$gallery)->with('folder',$folder);
   

    }else{
        
         return redirect()->route('siddhivinayak.masters.gallery.index')->with('message','Cannot Edit Deactivated Details')->with('er_type','danger');
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
      $gallery=Gallery::where('id', '=', $request->id)->first();
          $request['updated_by']=Auth::user()->id;
        
        
         $file = $request->file('file_name');
     if($file){
        $FilePath = 'siddhivinayak/image/gallery/'.$gallery->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['gallery_display_attachment']=$path;
       }


          $gallery->update($request->all());


          return redirect()->route('siddhivinayak.masters.gallery.index')->with('message','Updated successfully')->with('er_type','success');
        
   
    }



   public function deactivate($id)
    {
     $gallery=Gallery::where('id', '=', $id)->first();
     if($gallery){
      $gallery->delete();

    

      return redirect()->route('siddhivinayak.masters.gallery.index')->with('message','Successfully deactivated')->with('er_type','danger');
    }else{
      $gallery=Gallery::onlyTrashed()->where('id', '=', $id)->first();
      $gallery->restore();

       

      return redirect()->route('siddhivinayak.masters.gallery.index')->with('message','Successfully activated')->with('er_type','success ');
    }
  }


    


  }
