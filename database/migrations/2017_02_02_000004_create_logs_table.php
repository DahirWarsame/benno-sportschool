<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     * @table logs
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('log_id');
            $table->unsignedInteger('user_id');
            $table->timestamp('log_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('log_description', 100);


            $table->foreign('user_id', 'fk_user_id')
                ->references('user_id')->on('users')
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
       Schema::dropIfExists('logs');
     }
}
