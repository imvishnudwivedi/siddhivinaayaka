<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_attachments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('item_id');
            $table->integer('type')->comment("1=user_manual,2=connection_diagram,3=datasheet");
            $table->string('name');
            $table->string('attachment_path');
            $table->string('vedio_link');

           
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
        Schema::drop('item_attachments');
    }
}
