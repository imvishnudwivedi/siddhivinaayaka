<?php

namespace App\Models\masters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemSpecification extends Model
{
    use SoftDeletes;
       protected $table = 'item_specification';

   protected $dates = ['deleted_at'];

   protected $fillable = [
   'item_id','specifications','created_by','updated_by'
   ];
}
