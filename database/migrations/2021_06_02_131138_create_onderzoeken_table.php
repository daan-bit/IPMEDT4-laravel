<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnderzoekenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onderzoeken', function (Blueprint $table) {
            $table->id();
            $table->string('naam')->default("jaja");
            $table->integer('max_aantal_mensen')->default('1');
            $table->string('code')->default('0000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onderzoeken');
    }
}
