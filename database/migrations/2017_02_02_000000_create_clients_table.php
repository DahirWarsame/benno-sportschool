<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     * @table clients
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('client_id');
            $table->string('name', 20);
            $table->string('tussenvoegsel', 20)->nullable()->default(null);
            $table->string('lastname', 20);
            $table->string('adress', 30);
            $table->string('city', 30);
            $table->string('IBAN_number', 20)->nullable()->default(null);
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('subscription')->default('0');
            $table->tinyInteger('active')->default('0');
            $table->integer('code')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('clients');
     }
}
