<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subscribe extends Model
{
    use SoftDeletes;
       protected $table = 'subscribes';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'name','email','country','phone_number','comment','created_by','updated_by'
   ];
}
