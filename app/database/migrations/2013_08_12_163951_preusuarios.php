<?php

use Illuminate\Database\Migrations\Migration;

class Preusuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preusuarios', function($table)
	    {
	        $table->increments('id');
	        $table->string('email')->unique();
	        $table->string('codigovalidacion'); // este es un valor para ser enviado por email ;)
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
		Schema::drop('preusuarios');
	}

}