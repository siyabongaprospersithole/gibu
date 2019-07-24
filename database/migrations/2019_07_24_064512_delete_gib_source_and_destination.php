<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteGibSourceAndDestination extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gibs', function (Blueprint $table) {
            $table->dropColumn('source');
            $table->dropColumn('destination');
            $table->string('gibroute_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gibs', function (Blueprint $table) {
            $table->string('source');
            $table->string('destination');
            $table->dropColumn('gibroute_id');
        });
    }
}
