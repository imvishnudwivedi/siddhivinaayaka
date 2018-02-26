<?php

namespace App\Models\Career;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CareerModel extends Model
{
    use SoftDeletes;
   protected $table='career_master';
   protected $dates = ['deleted_at'];
}
