@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ route('admin.categories.create') }}">NEW CATEGORY</a>
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td><a href="{{ route('admin.categories.show', $category) }}">{{ $category->name }}</a>
                                </td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.categories.edit', $category) }}">Update</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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
