@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Create new tag</h1>
@stop

@section('content')
    <form class="card" action="{{ route('admin.tags.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div>
                <label for="name">Name:</label>
                <input id="name" name="name" placeholder="" type="text" value="">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="slug">Slug:</label>
                <input id="slug" name="slug" type="text" value="">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-success" type="submit">Create</button>
        </div>
    </form>
@stop
