<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTeamPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_team', function (Blueprint $table) {
            $table->integer('news_id')->unsigned()->index();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->integer('team_id')->unsigned()->index();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->primary(['news_id', 'team_id'])->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_team');
    }
}
