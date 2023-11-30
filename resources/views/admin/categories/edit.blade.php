@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
    <p>Categoria: {{ $category->name }}</p>
    <form class="card" action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
            <div>
                <label for="">Name:</label>
                <input type="text" name="name" value="{{ $category->name }}">
            </div>
            <div>
                <label for="">Slug:</label>
                <input type="text" name="slug" value="{{ $category->slug }}">
            </div>
            <button type="submit">Update</button>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
