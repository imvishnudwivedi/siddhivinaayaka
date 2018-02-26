<?php

namespace App\Models\masters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
       protected $table = 'category';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'name','description','created_by','updated_by'
   ];
}
