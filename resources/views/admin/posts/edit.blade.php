@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit post</h1>
@stop

@section('content')
    <form class="card" action="{{ route('admin.posts.update', $post) }}" method="post">
        @csrf
        @method('put')
        <div class="card-body">
            <div>
                <label for="title">title:</label>
                <input id="title" name="title" placeholder="" type="text" value="{{ $post->title }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="slug">Slug:</label>
                <input id="slug" name="slug" type="text" value="{{ $post->slug }}">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="extract">Extract:</label><br>
                <textarea name="extract" id="" cols="60" rows="5">{{ $post->extract }}</textarea>
            </div>
            <div>
                <label for="body">Body:</label>
                <br>
                <textarea name="body" id="" cols="60" rows="5">{{ $post->body }}</textarea>
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
            </div>
            <br>
            <div>
                <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
            </div>
            <button class="btn btn-success mt-3 px-5" type="submit">Update</button>
        </div>
    </form>
@stop
