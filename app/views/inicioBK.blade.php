@extends('layouts.layout')

@section('content')
	{{date('Y-m-D H:i:s')}}
    <p>inicio</p>
    {{ Form::open(array('url' => '/preusuario')) }}
    	{{ Form::label('código', '') }}
    	{{ Form::text('codigo', Input::old('codigo') ) }}
    	{{ Form::label('email', '') }}
    	{{ Form::text('email', Input::old('email') ) }}

    	{{ Form::text('num1', Input::old('num1') ) }}
    	{{ Form::text('num2', Input::old('num2') ) }}
    	{{ Form::text('num3', Input::old('num3') ) }}
    	{{ Form::text('num4', Input::old('num4') ) }}
    	{{ Form::text('num5', Input::old('num5') ) }}

    	{{ Form::submit('Guardar') }}
	{{ Form::close() }}
@stop