<?php

use Illuminate\Database\Migrations\Migration;

class Codigos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('codigos', function($table)
	    {
	        $table->increments('id');
	        $table->string('codigoA')->unique();
	        $table->string('codigoB')->unique();
	        $table->integer('statusId');
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
		Schema::drop('codigos');
	}

}