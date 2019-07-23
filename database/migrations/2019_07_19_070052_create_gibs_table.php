<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGibsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gibs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('driver_id');
            $table->string('meetup');
            $table->string('source');
            $table->string('destination');
            $table->string('price');
            $table->string('seats');
            $table->string('date');
            $table->string('time');
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
        Schema::dropIfExists('gibs');
    }
}
