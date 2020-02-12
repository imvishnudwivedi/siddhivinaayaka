<?php

namespace App\Models\masters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemAttachment extends Model
{
    use SoftDeletes;
       protected $table = 'item_attachments';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'item_id','name','attachment_path','type','vedio_link','created_by','updated_by'
   ];
}
