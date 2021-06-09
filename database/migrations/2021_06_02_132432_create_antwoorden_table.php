<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntwoordenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antwoorden', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vraag_id');
            $table->foreign("vraag_id")->references("id")->on("vragen")->onDelete('cascade');
            $table->string('antwoord');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('antwoorden', function (Blueprint $table) {
            $table->dropForeign('antwoorden_vraag_id_foreign');
        });
        Schema::dropIfExists('antwoorden');
    }
}
