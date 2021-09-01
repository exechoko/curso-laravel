@extends('layouts.master')

@section('title', 'Curso Laravel Exequiel')

@section('header')
  @parent
  <h1>Cabecera desde hola mundo</h1>
@stop

@section('content')
  @parent
  <p>Contenido de la vista hola-mundo</p>
@stop
