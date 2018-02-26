<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
   
   public function up()
    {
        Schema::create('news_master', function(Blueprint $table)
        {
        $table->increments('id');
        // $table->string('art_type');
         $table->string('news_heading');

        $table->string('news_description');
        $table->string('image_path');
        $table->string('updated_by');
        $table->string('created_by');
        $table->timestamps();
        $table->SoftDeletes();
    });
}

    
    public function down()
    {
       Schema::drop('news_master');
    }
}
