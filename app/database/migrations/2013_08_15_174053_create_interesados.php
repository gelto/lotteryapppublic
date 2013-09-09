<?php

use Illuminate\Database\Migrations\Migration;

class CreateInteresados extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interesados', function($table)
	    {
	        $table->increments('id');
	        $table->string('nombre');
	        $table->string('email');
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
		Schema::drop('interesados');
	}

}