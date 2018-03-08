<?php

namespace App\Http\Controllers\siddhivinayak\masters;

use Illuminate\Http\Request;
use App\Models\masters\Folder;



use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use Input;

class FolderController extends Controller
{



  public function index()
  {

    $folder=DB::table('folders as i')
    ->join('users AS u','i.created_by','=','u.id')
    ->leftjoin('users AS u1','i.updated_by','=','u1.id')
    
    ->select('i.*','u1.name as created_by','u1.name as updated_by')
    ->orderBy('i.id','ASC')
    ->get();



   
    return view('siddhivinayak.masters.folder.index')->with('folder',$folder);
  }






  public function create(Request $request)
    {

   
       return view('siddhivinayak.masters.folder.create');

    }



       public function uploadFolder(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'siddhivinayak/image/folder/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getFolderUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }


     public function uploadFolderImage(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'siddhivinayak/image/folder/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getFolderUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
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
       



   
   



        $file = $request->file('file_name');
      // dd($file);
        if($file){
        $FilePath = 'siddhivinayak/image/folder/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
        $request['folder_display_attachment']=$path;
        // $tmpFilePath = 'siddhivinayak/images/tmp/';

        // unlink($path);
       }

          $Folder=Folder::create($request->all());





         return redirect()->route('siddhivinayak.masters.folder.index')->with('message','Successfully Added')->with('er_type','success');
     
    }

    // public function show($id)
    // {


      
    //     $folder=DB::table('folder as i')
    //   ->join('category AS c','c.id','=','i.category_id')

    //     ->select('i.*','c.name as category_name')
    //     ->where('i.id',$id)
    //     ->first();

       

    //     return view('siddhivinayak.masters.folder.show')->with('folder',$folder);
    // }


    public function edit($id)
    {


        $folder=DB::table('folders as i')
        ->select('i.*')
        ->where('i.id',$id)
        ->first();

  if($folder){

        return view('siddhivinayak.masters.folder.edit')->with('folder',$folder);
    }else{

        return view('siddhivinayak.masters.folder.index')->with('message','Cannot Edit Deactivated Details')->with('er_type','danger');


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
      $folder=Folder::where('id', '=', $request->id)->first();
          $request['updated_by']=Auth::user()->id;
        
        
         $file = $request->file('file_name');
     if($file){
        $FilePath = 'siddhivinayak/image/folder/'.$folder->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['folder_display_attachment']=$path;
       }


          $folder->update($request->all());


          return redirect()->route('siddhivinayak.masters.folder.index')->with('message','Updated successfully')->with('er_type','success');
        
   
    }



   public function deactivate($id)
    {
     $folder=Folder::where('id', '=', $id)->first();
     if($folder){
      $folder->delete();

    

      return redirect()->route('siddhivinayak.masters.folder.index')->with('message','Successfully deactivated')->with('er_type','danger');
    }else{
      $folder=Folder::onlyTrashed()->where('id', '=', $id)->first();
      $folder->restore();

       

      return redirect()->route('siddhivinayak.masters.folder.index')->with('message','Successfully activated')->with('er_type','success ');
    }
  }


    


  }
