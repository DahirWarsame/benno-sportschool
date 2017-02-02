<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_id');
            $table->string('email', 100);
            $table->string('password', 20);
            $table->string('nfc_id', 20)->nullable()->default(null);
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('rol_id')->default('3');

            $table->unique(["email", "nfc_id"], 'unique_users');


            $table->foreign('client_id', 'client_id')
                ->references('client_id')->on('clients')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');

            $table->foreign('rol_id', 'rol_id')
                ->references('role_id')->on('roles')
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
       Schema::dropIfExists('users');
     }
}
