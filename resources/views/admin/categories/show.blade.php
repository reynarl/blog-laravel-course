@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <h2>{{ $category->name }}</h2>
    <p>{{ $category->slug }}</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
