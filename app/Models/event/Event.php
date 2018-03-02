<?php

namespace App\Models\event;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
   protected $dates = ['deleted_at'];

   protected $fillable = [
   'name','description','from_date','to_date'
   ];
}
