<?php

namespace App\Models\masters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Item extends Model
{
    use SoftDeletes;
       protected $table = 'item';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'category_id','sub_category_id','item_name','hsn_code','model_number','display_attachment','attachment','description','push_pull_flag','created_by','updated_by'
   ];

   public function getAllItems(){
   	$items=DB::table('category as c')
                 ->join('sub_category as sc','sc.category_id','=','c.id')
                 ->join('item as i','i.sub_category_id','=','sc.id')
                 ->select('c.name as category_name','sc.name as sub_category_name','i.*')
                 ->get();
    return $items;
   }

   public function getItemAttachments($type){

     $items=$this->getAllItems();
    
    $final_array=array();$final_i=0;
    foreach ($items as $i) {
      $ia=ItemAttachment::where('item_id',$i->id)->where('type',$type)->first();
      if($ia){
        $i->full_attchment_path=asset('/prok/image/item_attachment/'.$i->id.'/'.$ia->attachment_path);
        $final_array[$final_i]=$i;
        $final_i++;
      }
    }
   
   return $final_array;
   }
}
