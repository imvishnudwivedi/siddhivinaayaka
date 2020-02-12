<?php

namespace App\Http\Controllers\prok\masters;

use Illuminate\Http\Request;
use App\Models\masters\Item;
use App\Models\masters\ItemAttachment;
use App\Models\masters\ItemSpecification;

use App\Models\masters\Category;
use App\Models\masters\SubCategory;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use Input;
use Response;
use File;
class ItemController extends Controller
{



  public function index()
  {

    $item=DB::table('item as i')
    ->join('users AS u','i.created_by','=','u.id')
    ->leftjoin('users AS u1','i.updated_by','=','u1.id')
    ->join('category as c','c.id','=','i.category_id')    
   
    ->select('i.*','c.name')
    ->orderBy('i.id','ASC')
    ->get();



   
    return view('prok.masters.item.index')->with('item',$item);
  }


  public function getSubCategory(Request $request)
    {
      // dd($request->all());
      $sub_category_details=DB::table('sub_category as i')
        ->join('category AS c','i.category_id','=','c.id')
      
       ->select('i.*','c.name as category_name')
       ->where('i.category_id',$request->category_id)
       ->get();

   // dd($sub_category_details);

       return response()->json(array('sub_category_details'=>$sub_category_details));
    }




  public function create(Request $request)
    {

   
      $category=Category::where('deleted_at','=',NULL)->get();


      $sub_category=SubCategory::where('deleted_at','=',NULL)->get();

       return view('prok.masters.item.create')->with('category',$category)->with('sub_category',$sub_category);

    }



       public function uploadCandicateDocument(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'prok/image/item/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getItemUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }



     public function uploadImage(Request $request)
    {
      // dd($request->file());

      if($request->file('file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('file_name');
        $tmpFilePath = 'prok/image/item/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getItemUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }


  public function uploadDisplayImage(Request $request)
    {
      // dd($request->file());

      if($request->file('display_file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('display_file_name');
        $tmpFilePath = 'prok/image/item/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getItemUploadedTmpPath($path);

       // dd($file_path);
        return response()->json(array('path'=> $file_path), 200);
      } else {
        return response()->json(false, 200);
      }

    }


     public function uploadImg(Request $request)
    {
      // dd($request->file());

      if($request->file('display_file_name')) {

        //upload an image to the /img/tmp directory and return the filepath.
        $file = Input::file('display_file_name');
        $tmpFilePath = 'prok/image/item/';
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $tmpFileName = time() . '.' . $extension;
        $file = $file->move($tmpFilePath, $tmpFileName);
        $path = $tmpFileName;

        $file_path=getItemUploadedTmpPath($path);

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

public function headerAttachment(Request $request)
{

      // dd($request->all());

  $input = Input::all();
        // $rules = array(
        // 'file' => 'image|required',
        // );


  $destinationPath = 'prok/image/header_attachment/'; 
  $extension = Input::file('file')->getClientOriginalExtension();
       
  $fileName =Input::file('file')->getClientOriginalName();
  $upload_success = Input::file('file')->move($destinationPath, $fileName);

  if($upload_success){
    return Response::json(['success'=>200,'file'=>$destinationPath.'/'.$fileName]);
  }else{
    return Response::json('error', 400);
  }

}

// public function storeHeaderAttachment(Request $request)
// {
//         dd($request->all());


       

//   $item=Item::where('id',$request->attach_header_id)->first();

//   $attach=json_decode($request->header_attach_array);
//   $i=0;

//   $temp=$attach->$i;

//   $req['attachment_path']=$temp->name;
//   $item->update($req);

//   $attachment=ItemAttachment::where('id',$request->attach_header_id)->first();

//   return response()->json(array('attachment'=>$attachment));
// }


public function store(Request $request)
    {
      // dd($request->all());

      $request['created_by']=Auth::user()->id;
      $request['item_code']=$request->item_name;
      $request['hsn_code']=$request->hsn_code;
      $request['model_number']=$request->model_number;
 
      $request['category_id']=$request->category_id;
      $request['sub_category_id']=$request->sub_category_id;

      $request['description']=$request->description;

       
      $item=Item::create($request->all());

   foreach (json_decode($request->item_array) as $da) 
      {
        $req['item_id']=$item->id;

        $req['created_by']=Auth::user()->id;
        $req['specifications']=$da->specification;
      
        ItemSpecification::create($req);
      }  

      foreach (json_decode($request->link_array) as $lk) 
      {
        $req1['item_id']=$item->id;
        $req1['type']=4;

        $req1['created_by']=Auth::user()->id;
        $req1['vedio_link']=$lk->link;
        $req1['name']=$lk->vedio_name;

        ItemAttachment::create($req1);
      }

      
   

    if($request->file('file_name')) {
        $file = $request->file('file_name');

        $FilePath = 'prok/image/item/'.$item->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        // $path = $tmpFilePath . $FileName;
        $request['attachment']=$FileName;
        // $tmpFilePath = 'prok/image/tmp/';

        // unlink($path);
      }

       if($request->file('display_file_name')) {
        $file = $request->file('display_file_name');

        $FilePath = 'prok/image/item/'.$item->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        // $path = $tmpFilePath . $FileName;
        $request['display_attachment']=$FileName;
        // $tmpFilePath = 'prok/image/tmp/';

        // unlink($path);
      }

          $item->update($request->all());


      $destinationPath ='prok/image/item_attachment/'.$item->id.'/';

      File::makeDirectory($destinationPath, $mode = 0777, true, true);

      if(!empty($request->header_attach_array)){

        foreach (json_decode($request->header_attach_array) as $key => $ar) {

          if(isset($ar->file_path)){
            $image_name=explode("/",$ar->file_path);
            $image_name=end($image_name);
            

            copy($ar->file_path, $destinationPath.$image_name);

            $tmp['item_id']=$item->id;
            $tmp['name']=$request->user_manual_name;
            $tmp['attachment_path']=$image_name;
            $tmp['type']=$ar->type;
 
            ItemAttachment::create($tmp);
            // unlink($ar->file_path);
          }
        }
      }

      if(!empty($request->boq_attach_array)){

        foreach (json_decode($request->boq_attach_array) as $key => $br) {

          if(isset($br->file_path)){
            $image_name=explode("/",$br->file_path);
            $image_name=end($image_name);
            copy($br->file_path, $destinationPath.$image_name);

            $tmp['item_id']=$item->id;
            $tmp['name']=$request->connection_diagram_name;
            $tmp['attachment_path']=$image_name;
            $tmp['type']=$br->type;

            ItemAttachment::create($tmp);
            // unlink($ar->file_path);
          }
        }
      }



       if(!empty($request->bos_attach_array)){

        foreach (json_decode($request->bos_attach_array) as $key => $bs) {

          if(isset($bs->file_path)){
            $image_name=explode("/",$bs->file_path);
            $image_name=end($image_name);
            copy($bs->file_path, $destinationPath.$image_name);

            $tmp['item_id']=$item->id;
            $tmp['name']=$request->datasheet_name;
            $tmp['attachment_path']=$image_name;
            $tmp['type']=$bs->type;

            ItemAttachment::create($tmp);
            // unlink($ar->file_path);
          }
        }
      }


    


      return redirect()->route('prok.masters.item.index')->with('message','Successfully Added')->with('er_type','success'); 

    }


public function boqAttachment(Request $request)
{

      // dd($request->all());

  $input = Input::all();
        // $rules = array(
        // 'file' => 'image|required',
        // );


  $destinationPath = 'prok/image/header_attachment/boq_attachment'; 
  $extension = Input::file('file')->getClientOriginalExtension();
        // $fileName =$locationId->location_for_solar_roof_top.$date.$image_number.'.' . $extension;
  $fileName =Input::file('file')->getClientOriginalName();
  $upload_success = Input::file('file')->move($destinationPath, $fileName);

  if($upload_success){
    return Response::json(['success'=>200,'file'=>$destinationPath.'/'.$fileName]);
  }else{
    return Response::json('error', 400);
  }

}


public function bosAttachment(Request $request)
{
      // dd($request->all());
  $input = Input::all();
        // $rules = array(
        // 'file' => 'image|required',
        // );

  $destinationPath = 'prok/image/header_attachment/bos_attachment'; 
  $extension = Input::file('file')->getClientOriginalExtension();
        // $fileName =$locationId->location_for_solar_roof_top.$date.$image_number.'.' . $extension;
  $fileName =Input::file('file')->getClientOriginalName();
  $upload_success = Input::file('file')->move($destinationPath, $fileName);

  if($upload_success){
    return Response::json(['success'=>200,'file'=>$destinationPath.'/'.$fileName]);
  }else{
    return Response::json('error', 400);
  }

}





    public function show($id)
    {


    

      
        $item=DB::table('item as i')
        ->join('category as c','c.id','=','i.category_id')
        ->join('sub_category as sc','sc.id','=','i.sub_category_id')

        ->select('i.*','c.name','sc.name as sub_category_name')
        ->where('i.id',$id)
        ->first();

     $specifications=DB::table('item_specification as is')
        ->join('item as i','i.id','=','is.item_id')
        ->select('is.*','i.item_name')
        ->where('is.item_id',$id)
        ->get();
 
    $attachments=DB::table('item_attachments as ia')
        ->join('item as i','i.id','=','ia.item_id')
        ->select('ia.*','i.item_name')
        ->where('ia.item_id',$id)
        ->get();

// dd($item);

        return view('prok.masters.item.show')->with('item',$item)->with('specifications',$specifications)->with('attachments',$attachments);
    }


    public function edit($id)
    {


        $category=Category::where('deleted_at','=',NULL)->get();

      $sub_category=SubCategory::where('deleted_at','=',NULL)->get();

        $item=DB::table('item as i')
        ->join('category as c','c.id','=','i.category_id')
        ->join('sub_category as sc','sc.category_id','=','c.id')

        ->select('i.*','c.name','sc.name as sub_category_name')
        ->where('i.id',$id)
        ->first();

     $specifications=DB::table('item_specification as is')
        ->join('item as i','i.id','=','is.item_id')
        ->select('is.*','i.item_name')
        ->where('is.item_id',$id)
        ->get();
 
    $attachments=DB::table('item_attachments as ia')
        ->join('item as i','i.id','=','ia.item_id')
        ->select('ia.*','i.item_name')
        ->where('ia.item_id',$id)
        ->get();

     $attachment_link=DB::table('item_attachments as ia')
        ->join('item as i','i.id','=','ia.item_id')
        ->select('ia.*','i.item_name')
        ->where('ia.item_id',$id)
        ->where('ia.type','=',4)

        ->get();    
        // dd($attachments);

        return view('prok.masters.item.edit')->with('item',$item)->with('category',$category)->with('specifications',$specifications)->with('attachments',$attachments)->with('sub_category',$sub_category)->with('attachment_link',$attachment_link);
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
      $item=Item::where('id', '=', $request->id)->first();
          $request['updated_by']=Auth::user()->id;
      $request['item_name']=$request->item_name;
      $request['hsn_code']=$request->hsn_code;
      $request['model_number']=$request->model_number;

      $request['category_id']=$request->category_id;
      $request['sub_category_id']=$request->sub_category_id;

      $request['description']=$request->description;


        
         $file = $request->file('file_name');
         if($file){
        $FilePath = 'prok/image/item/'.$item->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['attachment']=$FileName;
         }

       $file = $request->file('display_file_name');
         if($file){
        $FilePath = 'prok/image/item/'.$item->id.'/';
        $FileName = time() . '-' . $file->getClientOriginalName();
        $file = $file->move($FilePath, $FileName);
        $path = $FilePath . $FileName;
          // dd($path);
        $request['display_attachment']=$FileName;
         }


          $item->update($request->all());

DB::table('item_specification')->where('item_id',$request->id)->delete();

    
foreach (json_decode($request->item_array) as $da) 
      {
        $req['item_id']=$item->id;

        $req['created_by']=Auth::user()->id;
        $req['specifications']=$da->specification;
      
        ItemSpecification::create($req);
      } 

      

// dd('ww');
DB::table('item_attachments')->where('item_id',$request->id)->where('type','=',4)->delete();
      
foreach (json_decode($request->link_array) as $lk) 
      {
        $req1['item_id']=$item->id;
        $req1['type']=4;

        $req1['created_by']=Auth::user()->id;
        $req1['vedio_link']=$lk->link;
        $req1['name']=$lk->vedio_name;

        ItemAttachment::create($req1);
      }


   

      $destinationPath ='prok/image/item_attachment/'.$item->id.'/';

      File::makeDirectory($destinationPath, $mode = 0777, true, true);

      if(!empty($request->header_attach_array)){

        foreach (json_decode($request->header_attach_array) as $key => $ar) {

          if(isset($ar->file_path)){
            $image_name=explode("/",$ar->file_path);
            $image_name=end($image_name);
            copy($ar->file_path, $destinationPath.$image_name);

            $tmp['item_id']=$item->id;
            $tmp['name']=$request->user_manual_name;
            $tmp['attachment_path']=$image_name;
            $tmp['type']=$ar->type;
 
            ItemAttachment::create($tmp);
            // unlink($ar->file_path);
          }
        }
      }

      if(!empty($request->boq_attach_array)){

        foreach (json_decode($request->boq_attach_array) as $key => $br) {

          if(isset($br->file_path)){
            $image_name=explode("/",$br->file_path);
            $image_name=end($image_name);
            copy($br->file_path, $destinationPath.$image_name);

            $tmp['item_id']=$item->id;
            $tmp['name']=$request->connection_diagram_name;
            $tmp['attachment_path']=$image_name;
            $tmp['type']=$br->type;

            ItemAttachment::create($tmp);
            // unlink($ar->file_path);
          }
        }
      }



       if(!empty($request->bos_attach_array)){

        foreach (json_decode($request->bos_attach_array) as $key => $bs) {

          if(isset($bs->file_path)){
            $image_name=explode("/",$bs->file_path);
            $image_name=end($image_name);
            copy($bs->file_path, $destinationPath.$image_name);

            $tmp['item_id']=$item->id;
            $tmp['name']=$request->datasheet_name;
            $tmp['attachment_path']=$image_name;
            $tmp['type']=$bs->type;

            ItemAttachment::create($tmp);
            // unlink($ar->file_path);
          }
        }
      }





          return redirect()->route('prok.masters.item.index')->with('message','Updated successfully')->with('er_type','success');
        
   
    }




    public function deleteAttachment(Request $request)
    {
      // dd($request->all());
     unlink('prok/image/item_attachment/'.$request->item_id.'/'.$request->attachment_path);

     if(isset($request->item_id)){
      ItemAttachment::where('id',$request->id)->forceDelete();
     }

     return response()->json(1);

   }

     public function deleteBoqAttachment(Request $request)
    {

      // dd($request->all());

     unlink('prok/image/item_attachment/'.$request->item_id.'/'.$request->attachment_path);

     if(isset($request->item_id)){
      ItemAttachment::where('id',$request->id)->forceDelete();
     }

     return response()->json(1);

   }

     public function deleteBosAttachment(Request $request)
    {
     unlink('prok/image/item_attachment/'.$request->item_id.'/'.$request->attachment_path);

     if(isset($request->item_id)){
      ItemAttachment::where('id',$request->id)->forceDelete();
     }

     return response()->json(1);

   }


public function deleteTmpAttachment(Request $request)
    {
      // dd($request->all());
     unlink($request->path);

     // if(isset($request->item_id)){
     //  ItemAttachment::where('id',$request->id)->forceDelete();
     // }

     return response()->json(1);

   }


   public function deleteBoqTmpAttachment(Request $request)
    {
      // dd($request->all());
     unlink($request->path);

     // if(isset($request->item_id)){
     //  ItemAttachment::where('id',$request->id)->forceDelete();
     // }

     return response()->json(1);

   }


   public function deleteBosTmpAttachment(Request $request)
    {
      // dd($request->all());
     unlink($request->path);

     // if(isset($request->item_id)){
     //  ItemAttachment::where('id',$request->id)->forceDelete();
     // }

     return response()->json(1);

   }

    public function push($id)
    {
        // dd($id);
      $item=DB::table('item as op')
          ->select('op.*')
          ->where('op.id','=',$id)
          ->first();
     
        if($item->push_pull_flag == 0){
            DB::table('item')->where('id',$id)->update(['push_pull_flag' => 1]);

            return redirect()->route('prok.masters.item.index')->with('message','Successfully pushed to website')->with('er_type','success');
           
        }else{
          DB::table('item')->where('id',$id)->update(['push_pull_flag' => 0]);

          return redirect()->route('prok.masters.item.index')->with('message','Successfully pulled from website')->with('er_type','success');
        }
    }




  }
