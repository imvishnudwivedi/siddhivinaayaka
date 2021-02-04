<?php

namespace App\Models\masters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flyer extends Model
{
    use SoftDeletes;
       protected $table = 'flyer';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'flyer_name','flyer_display_attachment','updated_by'
   ];
}
