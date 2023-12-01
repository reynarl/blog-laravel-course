@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Create new post</h1>
@stop

@section('content')
    <form class="card" action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div>
                <label for="title">title:</label>
                <input id="title" name="title" placeholder="" type="text" value="">
                @error('title')
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
            <div>
                <label for="extract">Extract:</label><br>
                <textarea name="extract" id="" cols="60" rows="5"></textarea>
            </div>
            <div>
                <label for="body">Body:</label>
                <br>
                <textarea name="body" id="" cols="60" rows="5"></textarea>
            </div>
            <div>
                <label for="status">Status:</label>
                <select name="status" id="">
                    <option value="1">Publicado</option>
                    <option value="2">Borrador</option>
                </select>
            </div>
            <div>
                <label for="tags">Tags:</label><br>
                @foreach ($tags as $tag)
                    <input name="tags" type="checkbox" value="{{ $tag->id }}">
                    <label>{{ $tag->name }}</label><br>
                @endforeach
            </div>
            <div>
                <label for="category_id">Categoria:</label>
                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div> <br>
            <div>
                <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                {{-- <select disabled name="user_id" id="user_id">
                    <option selected value="">{{ auth()->user()->name }}</option>
                </select> --}}
            </div>
            <button class="btn btn-success mt-3 px-5" type="submit">Create</button>
        </div>
    </form>
@stop
