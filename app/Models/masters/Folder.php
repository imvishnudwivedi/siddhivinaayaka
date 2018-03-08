<?php

namespace App\Models\masters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Folder extends Model
{
    use SoftDeletes;
       protected $table = 'folders';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'folder_name','folder_display_attachment','created_by','updated_by'
   ];
}
