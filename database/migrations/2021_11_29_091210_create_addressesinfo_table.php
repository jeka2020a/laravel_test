<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addressesinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('addresses',300);
            $table->string('addresses2',300);
            $table->string('city',100);
            $table->string('state_province',200);
            $table->string('postal__zipcode',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addressesinfo');
    }
}
