<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestbokkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestbokkings', function (Blueprint $table) {
            $table->increments('id');
             $table->string('customer_name');
            $table->string('phone_number');
            $table->string('address');
            $table->string('center_name');
            $table->string('email');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('date');
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
        Schema::dropIfExists('requestbokkings');
    }
}
