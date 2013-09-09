<?php 
class Sorteo extends Eloquent {

	public function jugadas()
    {
        return $this->hasMany('Jugada');
    }

}