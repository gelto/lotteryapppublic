<?php 
class Jugada extends Eloquent {

	public function preusuario()
    {
        return $this->belongsTo('Preusuario');
    }

    public function codigo()
    {
        return $this->belongsTo('Codigo');
    }

    public function sorteo()
    {
        return $this->belongsTo('Sorteo');
    }

}