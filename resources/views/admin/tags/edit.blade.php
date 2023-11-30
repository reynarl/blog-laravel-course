@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit {{ $tag->name }}</h1>
@stop

@section('content')
    <form class="card" action="{{ route('admin.tags.update', $tag) }}" method="post">
        @csrf
        @method('put')
        <div class="card-body">
            <div>
                <label for="name">Name:</label>
                <input id="name" name="name" placeholder="" type="text" value="{{ $tag->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="slug">Slug:</label>
                <input id="slug" name="slug" type="text" value="{{ $tag->slug }}">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
@stop
