<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('stories', function(Blueprint $table)
				{
					$table->increments('id');
					$table->integer('storyId');
					$table->string('time_ts');
					$table->string('text');
					$table->string('title');
					$table->integer('score');
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
		Schema::drop('stories');
    }
}
