<?php

class Modulo extends Eloquent {

	public function etiquetas(){
		return $this->hasMany('Etiqueta');
	}
}