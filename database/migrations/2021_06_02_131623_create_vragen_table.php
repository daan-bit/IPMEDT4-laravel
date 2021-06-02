<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vragen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('onderzoek_id');
            $table->foreign("onderzoek_id")->references("id")->on("onderzoeken");
            $table->string('cat_naam');
            $table->foreign("cat_naam")->references("naam")->on("categorien");
            $table->string('vraag');
            $table->string('type_vraag'); //open of meerkeuze
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vragen', function (Blueprint $table) {
            $table->dropForeign('vragen_onderzoek_id_foreign');
            $table->dropForeign('vragen_cat_naam_foreign');
        });
        Schema::dropIfExists('vragen');
        
    }
}
