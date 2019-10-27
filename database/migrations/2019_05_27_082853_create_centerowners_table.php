<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenterownersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centerowners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_name');
            $table->string('center_name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('center_capacity');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('centerowners');
    }
}
