<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportdataTable extends Migration
{
    /**
     * Run the migrations.
     * @table sportdata
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportdata', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sportdata_id');
            $table->time('duration');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('device_id');


            $table->foreign('user_id', 'user_id')
                ->references('user_id')->on('users')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');

            $table->foreign('device_id', 'apparaat_id')
                ->references('device_id')->on('devices')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('sportdata');
     }
}
