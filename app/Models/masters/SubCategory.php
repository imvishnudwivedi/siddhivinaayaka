<?php

namespace App\Models\masters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;
       protected $table = 'sub_category';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'category_id','name','description','attachment_path','created_by','updated_by'
   ];
}
