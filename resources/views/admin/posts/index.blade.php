@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>
        Lista de posts</h1>
@stop

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ route('admin.posts.create') }}">NEW POST</a>
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Extract</th>
                            <th>Status</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route('admin.posts.show', $post) }}">{{ $post->title }}</a>
                                </td>
                                <td>{{ $post->extract }}</td>
                                <td>{{ $post->status }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        {{ $tag->name }}
                                    @endforeach
                                </td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}">Update</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
