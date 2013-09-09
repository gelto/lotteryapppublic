@extends('layouts.layout')
@section('content')
<?php $ruta = "/public/"; ?>
<script src="{{ URL::to('/'); }}/{{ $ruta }}statics/js/inicio.js"></script>
<!-- TOP -->
<div class="row ">
  <div class="large-10 columns">
    
	@if(isset($usuariolog))
		<a href="{{ URL::to('/'); }}/logout" class="small button expand">
	 		{{ $usuariolog->first_name }} (salir)
	 	</a>
	@else
		<a href="{{ URL::to('/'); }}/login" class="small button expand">
	 		Ingresar
	 	</a>
	@endif
    
  </div>
</div>


<div class="row">
  <div class="small-7 small-centered columns">
  	<br>
  	<br>
  	<a href="{{ URL::to('/'); }}">
  	<img src="{{ URL::to('/'); }}/{{ $ruta }}statics/img/logos/loguito.png"/>
  	</a>
  </div>
  <div class="large-10 columns">
  	<h6>Aviso de privacidad</h6>
  </div>
  <br>
  
  <div class="large-10 columns">
  	Lottery Popcorn, S. A. DE C. V., le informa que es el responsable de sus datos personales los cuales pudieron haber sido obtenidos en su carácter de (i) cliente o (ii) cliente potencial.
  </div>
  <br>

  <div class="large-10 columns">
  	&nbsp;
  </div>
  <br>

  <div class="large-10 columns">
  	De no manifestar su oposición se entenderá que autoriza a Lottery Popcorn al tratamiento de sus datos personales para las siguientes finalidades:
  </div>
  <br>

  <div class="large-10 columns">
  	&nbsp;
  </div>
  <br>

  <div class="large-10 columns">
  	CLIENTES. (i) Para hacer efectiva la participación en los sorteos, (ii) proveerle de un bien o servicio, (iii) informarle de futuros sorteos y resultados, (iv) realizar actividades de mercadeo, (v) ofrecerle productos e información, (vi) realizar análisis estadísticos y de mercado, (vii) invitarle a eventos, (viii) informarle de promociones y lanzamientos, (ix) mantener actualizados nuestros registros; todo ello en relación a los productos o servicios de Lottery Popcorn y sus socios de negocios
  </div>
  <br>

  <div class="large-10 columns">
  	&nbsp;
  </div>
  <br>

  <div class="large-10 columns">
  	Las finalidades primordiales para las cuales se usará su información y las cuales dan origen a nuestra relación son las mencionadas en los puntos (i)(ii)(iii)(iv), siendo que la (v)(vi)(vii)(viii)(ix) no son necesarias para mantener nuestra relación jurídica.
  </div>
  <br>

  <div class="large-10 columns">
  	&nbsp;
  </div>
  <br>

  <div class="large-10 columns">
  	CLIENTES POTENCIALES. (i) Realizar actividades de mercadeo y prospección, (ii) ofrecerle productos e información, (iii) realizar análisis estadísticos y de mercado, (iv) invitarle a eventos, (v) informarle de promociones, (vi) mantener actualizados nuestros registros; todo ello en relación a los productos o servicios de Lottery Popcorn y sus socios de negocios.
  </div>
  <br>

  <div class="large-10 columns">
  	&nbsp;
  </div>
  <br>

  <div class="large-10 columns">
  	Las finalidades para las cuales se usará su información en carácter de cliente potencial, son la mercadotecnia, publicidad y prospección de las formas en el párrafo que antecede.
  </div>
  <br>

  <div class="large-10 columns">
  	&nbsp;
  </div>
  <br>

  <div class="large-10 columns">
  	Como cliente, usted podrá manifestar su negativa al uso de su información para los puntos (v)(vi)(vii)(viii)(ix) del apartado de CLIENTES; por otra parte, como cliente potencial, usted podrá manifestar su negativa al uso de su información para los puntos (i)(ii)(iii)(iv)(v)(vi) del apartado de CLIENTE POTENCIAL. Ya sea como cliente o cliente potencial deberá enviar un correo electrónico dirigido a <a href="mailto:protecciondatos@lotterypopcorn.com" target="_blank">protecciondatos@lotterypopcorn.com</a> manifestando su negativa y conforme a lo señalado en el aviso de privacidad integral ubicado en la página <a href="http://www.lotterypopcorn.com/legales" target="_blank">http://www.lotterypopcorn.com/legales</a>.
  </div>
  <br>
</div>


@stop