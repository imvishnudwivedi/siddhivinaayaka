<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class NewsModel extends Model
{
    use SoftDeletes;
   protected $table='news_master';
   protected $dates = ['deleted_at'];
}
