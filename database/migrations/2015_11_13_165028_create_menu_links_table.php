<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu_links', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';

			$table->increments('id');
			$table->string('title');
			$table->string('link')->unique();
			$table->integer('menu_id')->unsigned();
			$table->integer('weight')->unsigned();
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
		Schema::drop('menu_links');
	}

}
