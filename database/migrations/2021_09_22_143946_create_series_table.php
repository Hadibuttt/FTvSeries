<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('image');
            $table->string('description',1024);
            $table->string('seo',1024);
            $table->string('rating');
            $table->string('series_views');
            $table->string('season_views');
            $table->string('episode_views');
            $table->string('cast');
            $table->string('runtime');
            $table->string('genre');
            $table->string('First_Alphabet');
            $table->string('Mid_Alphabet');
            $table->string('Last_Alphabet');
            $table->string('imdb',1024);
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
        Schema::dropIfExists('series');
    }
}
