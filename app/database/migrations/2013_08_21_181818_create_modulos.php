<?php

use Illuminate\Database\Migrations\Migration;

class CreateModulos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modulos', function($table)
	    {
	        $table->increments('id');
	        $table->string('nombre');
	        $table->string('statusId');
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
		Schema::drop('modulos');
	}

}