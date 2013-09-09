<?php

use Illuminate\Database\Migrations\Migration;

class Jugadas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('jugadas', function($table)
	    {
	    	$table->increments('id');
	        $table->unsignedInteger('preusuario_id');
	        $table->unsignedInteger('sorteo_id');
	        $table->unsignedInteger('codigo_id');
	        $table->integer('num1');
	        $table->integer('num2');
	        $table->integer('num3');
	        $table->integer('num4');
	        $table->integer('num5');
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
		Schema::drop('jugadas');
	}

}