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
  	<img src="{{ URL::to('/'); }}/{{ $ruta }}statics/img/logos/loguito.png"/>
  </div>
  <div class="large-10 columns">
  	<!-- forma -->
  	<form class="custom">
  	  <br>
	  <fieldset>
	    <legend>Registra tu código</legend>
	    {{ Form::token() }}

	    <div class="row">
	      <div class="large-10 columns">
	        <label>Código:</label>
	        <input id="codigo" type="text" placeholder="">
	      </div>
	      <div class="large-10 columns">
	        <label>Email:</label>
	        <input id="email" type="text" placeholder="">
	      </div>
	      <div class="large-10 columns">
	      	<label class="r">Escribe el texto de la imagen:</label>
	        <input id="captcha" type="text" placeholder="">
	        <label id="captchaImg" class="r">{{ HTML::image(Captcha::img(), 'Captcha image') }}</label>
	      </div>
	    </div>

	    <br>


	    <div class="row">
	    	<div class="large-10 small-centered columns">
	    		<br>
	    		<label id="numeros5" >Selecciona 5 números</label>
	    		<br>
	    		<hr>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">01</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">02</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">03</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">04</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">05</a>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">06</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">07</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">08</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">09</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">10</a>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">11</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">12</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">13</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">14</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">15</a>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">16</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">17</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">18</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">19</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">20</a>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">21</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">22</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">23</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">24</a>
	    	</div>
	    	<div class="small-2 columns">
	    		<a href="#" class="tiny button round expand numero">25</a>
	    	</div>
	    </div>
	    
	    <hr>
	    <div class="row">
	    	<div class="large-10 columns">
	    	  <br>
		      <label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;"><span class="custom checkbox"></span> Declaro ser mayor de edad</label>
		    </div>
	    </div>
	     <div class="row">
	    	<div class="large-10 columns">
	    	  <br>
		      <label for="checkbox2"><input type="checkbox" id="checkbox2" style="display: none;"><span class="custom checkbox"></span> Acepto <a href="{{ URL::to('/'); }}/legales" >términos y condiciones</a></label>
		    </div>
	    </div>
	    <br>
	    <div class="row">
	    	<div class="small-10 columns">
	    		<a id="registrarCodigo" class="button  success expand">Enviar</a>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="small-10 columns">
	    		<label id="errores" class="error"></label>
	    	</div>
	    </div>

	  </fieldset>
	</form>
  	<!-- forma fin -->
  </div>
</div>


<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<label>Ligas de interés</labels>
	<hr>
	<br>
	<a href="{{ URL::to('/legales'); }}/">
  	<img src="{{ URL::to('/'); }}/{{ $ruta }}statics/img/secciones/legales.jpg" width="100%"/>
  	</a>
  </div>
</div>
<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<h6>Aspectos legales</h6>
  </div>
</div>

<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<hr>
  	<a href="{{ URL::to('/privacidad'); }}/">
  	<img src="{{ URL::to('/'); }}/{{ $ruta }}statics/img/secciones/privacidad.jpg" width="100%"/>
  	</a>
  </div>
</div>
<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<h6>Aviso de privacidad</h6>
  </div>
</div>

<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<hr>
  	<a href="{{ URL::to('/historial'); }}/">
  	<img src="{{ URL::to('/'); }}/{{ $ruta }}statics/img/secciones/historial.jpg" width="100%"/>
  	</a>
  </div>
</div>
<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<h6>Historial de sorteos</h6>
  </div>
</div>

<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<hr>
  	<a href="{{ URL::to('/siguiente'); }}/">
  	<img src="{{ URL::to('/'); }}/{{ $ruta }}statics/img/secciones/siguiente.jpg" width="100%"/>
  	</a>
  </div>
</div>
<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<h6>Siguiente sorteo</h6>
  </div>
</div>

<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<hr>
  	<a href="{{ URL::to('/preguntasfrecuentes'); }}/">
  	<img src="{{ URL::to('/'); }}/{{ $ruta }}statics/img/secciones/faq.jpg" width="100%"/>
  	</a>
  </div>
</div>
<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<h6>Preguntas frecuentes</h6>
  </div>
</div>

<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<hr>
  	<a href="{{ URL::to('/contacto'); }}/">
  	<img src="{{ URL::to('/'); }}/{{ $ruta }}statics/img/secciones/contacto.jpg" width="100%"/>
  	</a>
  </div>
</div>
<div class="row">
  <div class="small-10 small-centered columns">
  	<br>
  	<h6>Contáctanos</h6>
  </div>
</div>


@stop