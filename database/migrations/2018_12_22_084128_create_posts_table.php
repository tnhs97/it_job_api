<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 50);
			$table->string('description', 1000);
			$table->string('requirement', 1000);
			$table->string('salary', 50);
			$table->integer('amount_of_people');
			$table->date('start_day');
			$table->date('end_day');
			$table->integer('employer_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('posts');
	}

}
