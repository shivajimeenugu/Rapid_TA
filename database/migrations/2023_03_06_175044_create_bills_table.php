<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("buser");
            $table->date("bdate");
            $table->integer("bfrompincode");
            $table->string("bfromplace");

            $table->integer("btopincode");
            $table->string("btoplace");

            $table->string("bmode");
            $table->integer("bkm");
            $table->integer("bda");
            $table->integer("bamount");

            $table->unsignedBigInteger("bcid");


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
        Schema::dropIfExists('bills');
    }
}
