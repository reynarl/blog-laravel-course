@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->slug }}</p>
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">Extract</h4>
            <p>{{ $post->extract }}</p>
            <h4 class="text-center">Body</h4>
            <p>{{ $post->body }}</p>

            <div>
                <p>tags</p>
                <ul>
                    @foreach ($post->tags as $tag)
                        <li>{{ $tag->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
