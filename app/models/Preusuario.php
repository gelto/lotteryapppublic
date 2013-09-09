<?php 
class Preusuario extends Eloquent {

	// tiene un usuario
	public function user()
    {
        return $this->hasOne('User');
    }

}