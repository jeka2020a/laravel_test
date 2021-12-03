<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name',100);
            $table->string('last_name',100);
            $table->string('phone_number',100);
            $table->string('email',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersinfo');
    }
}
