<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatatypeChangeLinkItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_attachments', function (Blueprint $table) {
            $table->text('vedio_link')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_attachments', function (Blueprint $table) {
            $table->string('vedio_link')->change();
        });
    }
}
