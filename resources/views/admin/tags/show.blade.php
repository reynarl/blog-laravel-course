@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Tag</h1>
@stop

@section('content')
    <h2>{{ $tag->name }}</h2>
    <p>{{ $tag->slug }}</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
