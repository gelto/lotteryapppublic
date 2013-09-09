@extends('layouts.layout')
@section('content')
<?php $ruta = "/public/"; ?>
<script src="{{ URL::to('/'); }}/{{ $ruta }}statics/js/registro.js"></script>
<!-- TOP -->
<div class="row ">
  <div class="large-10 columns">
    <a class="small button expand">Ingresar</a>
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
  	<!-- forma -->
  	<form class="custom">
  	  <br>
	  <fieldset>
	    <legend>Registro</legend>
	    {{ Form::token() }}

	    <div class="row">
	      <div class="large-10 columns">
	        <label>Nombres:</label>
	        <input id="nombre" type="text" placeholder="">
	      </div>
	      <div class="large-10 columns">
	        <label>Apellido paterno:</label>
	        <input id="paterno" type="text" placeholder="">
	      </div>
	      <div class="large-10 columns">
	        <label>Apellido materno:</label>
	        <input id="materno" type="text" placeholder="">
	      </div>
	      <div class="large-10 columns">
	        <label>Contraseña:</label>
	        <input id="pass1" type="password" placeholder="">
	      </div>
	      <div class="large-10 columns">
	        <label>Confirmar contraseña:</label>
	        <input id="pass2" type="password" placeholder="">
	      </div>
	    </div>

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

	    <input type="hidden" id="ide" value="{{ $ide }}"/>
	    <input type="hidden" id="mitoken" value="{{ $token }}"/>

	    <br>

	    <hr>
	    <div class="row">
	    	<div class="small-10 columns">
	    		<a id="registrar" class="button success expand">Enviar</a>
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


@stop