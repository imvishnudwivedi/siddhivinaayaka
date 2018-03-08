<?php

namespace App\Models\masters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
       protected $table = 'galleries';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'gallery_name','folder_id','gallery_display_attachment','created_by','updated_by','push_pull_flag'
   ];
}
