<?php

use Illuminate\Database\Migrations\Migration;

class CreateEtiquetas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etiquetas', function($table)
	    {
	        $table->increments('id');
	        $table->string('texto', 2048);
	        $table->string('statusId');
	        $table->unsignedInteger('modulo_id');
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
		Schema::drop('etiquetas');
	}

}