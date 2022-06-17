<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculates', function (Blueprint $table) {
            $table->id();
            $table->integer('TotalM');
            $table->string('FirstTitle');
            $table->integer('FirstCost');
            $table->string('SecondTitle');
            $table->integer('SecondCost');
            $table->integer('TotalFandS');
            $table->integer('CurrentM');
            $table->integer('FinalM');
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
        Schema::dropIfExists('calculates');
    }
}
