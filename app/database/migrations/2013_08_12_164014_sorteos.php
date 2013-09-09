<?php

use Illuminate\Database\Migrations\Migration;

class Sorteos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sorteos', function($table)
	    {
	        $table->increments('id');
	        $table->dateTime('fechaInicio'); 	// el dia q se cierran los registros
	        $table->dateTime('fechaFin');		// el dia q se juega el sorteo 
	        $table->float('cantidad');
	        $table->integer('num1');
	        $table->integer('num2');
	        $table->integer('num3');
	        $table->integer('num4');
	        $table->integer('num5');
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
		Schema::drop('sorteos');
	}

}