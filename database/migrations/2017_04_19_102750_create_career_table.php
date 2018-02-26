<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_master', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('career_heading');
            $table->string('expr_required');
          
            $table->string('domain');
            $table->string('offered_salary');

            $table->string('career_description');

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
        //
    }
}
