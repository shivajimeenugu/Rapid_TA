<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('climes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cuser");
            $table->string("cname");
            $table->integer("camount");
            $table->string("cstatus");
            $table->string("cremarks");
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
        Schema::dropIfExists('climes');
    }
}
