<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchinggameMatchingGameTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchinggame__matchinggame_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('matchinggame_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['matchinggame_id', 'locale']);
            $table->foreign('matchinggame_id')->references('id')->on('matchinggame__matchinggames')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matchinggame__matchinggame_translations', function (Blueprint $table) {
            $table->dropForeign(['matchinggame_id']);
        });
        Schema::dropIfExists('matchinggame__matchinggame_translations');
    }
}
