<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSankalpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sankalpa', function (Blueprint $table) {
          $table->increments('id');
            $table->text('name');
            $table->text('gotra');
            $table->text('rashi');
            $table->text('email');
            $table->text('rashi');
            $table->text('phone_number');
            $table->string('updated_by');
            $table->string('created_by');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sankalpa');
    }
}
