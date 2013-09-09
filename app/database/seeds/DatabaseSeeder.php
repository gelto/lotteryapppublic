<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SorteosSeeder');
		$this->call('CodigosSeeder');

        $this->command->info('Sembrados los códigos');
	}

}

class CodigosSeeder extends Seeder {

    public function run()
    {
        //DB::table('codigos')->delete();

        for($i=0;$i<1000000;$i++){
            $randA = generaRand();
            $codigoA = Codigo::where('codigoA', '=', $randA)->get();
            $randB = generaRand();
            $codigoB = Codigo::where('codigoB', '=', $randB)->get();
            if(count($codigoA)==0 && count($codigoB)==0){
                Codigo::create(array('codigoA' => $randA, 'codigoB' => $randB, 'statusId' => 2 ));    
            }
        }
    }

}

class SorteosSeeder extends Seeder {

    public function run()
    {
        //DB::table('codigos')->delete();

        $vals = array();
        $vals['fechaInicio'] = "2013-08-12 10:00:00";
        $vals['fechaFin'] = "2013-08-12 20:00:00";
        $vals['cantidad'] = "1578";
        $vals['statusId'] = "3";

        Sorteo::create($vals);

        $vals = array();
        $vals['fechaInicio'] = "2013-09-12 10:00:00";
        $vals['fechaFin'] = "2013-09-25 20:00:00";
        $vals['cantidad'] = "500";
        $vals['statusId'] = "2";

        Sorteo::create($vals);
    }

}

function generaRand(){
	$vars = array("a","b","c","d","e","f","g","h","i","j","k","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9" );
	$random = $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)];
	return $random;
}