<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sankalpa extends Model
{
    use SoftDeletes;
       protected $table = 'sankalpa';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'name','gotra','nakshatra','rashi','phone_number','email','created_by','updated_by'
   ];
}
