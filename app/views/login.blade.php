@extends('layouts.layout')
@section('content')
<?php $ruta = "/public/"; ?>
<script src="{{ URL::to('/'); }}/{{ $ruta }}statics/js/login.js"></script>


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
	    <legend></legend>
	    {{ Form::token() }}

	    <div class="row">
	      <div class="large-10 columns">
	        <label>Correo:</label>
	        <input id="email" type="text" placeholder="">
	      </div>
	      <div class="large-10 columns">
	        <label>Contraseña:</label>
	        <input id="pass" type="password" placeholder="">
	      </div>
	    </div>

	    <br>

	    <div class="row">
	    	<div class="small-10 columns">
	    		<a id="ingresar" class="button  success expand">Enviar</a>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="small-10 columns">
	    		<label id="errores" class="error"></label><label class="error" id="recuperar"></label>
	    	</div>
	    </div>

	  </fieldset>
	</form>
  	<!-- forma fin -->
  </div>
</div>

@stop