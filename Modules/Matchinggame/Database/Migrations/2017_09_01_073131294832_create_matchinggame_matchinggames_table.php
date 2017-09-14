<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchinggameMatchingGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchinggame__matchinggames', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // My fields
            $table->boolean('theme_active');
            $table->string('prio');                 // low, medium, high
            $table->string('name');
            $table->string('description');
            $table->string('bkg_image');
            $table->string('match_image_0');
            $table->string('match_image_1');
            $table->string('match_image_2');
            $table->string('match_image_3');
            $table->string('match_image_4');
            $table->string('match_image_5');
            $table->string('match_image_6');
            $table->string('match_image_7');
            $table->string('match_image_8');
            $table->string('match_image_9');
            $table->string('cover_image');
            $table->string('video'); 
            $table->date('from_date');
            $table->date('to_date');

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
        Schema::dropIfExists('matchinggame__matchinggames');
    }
}
