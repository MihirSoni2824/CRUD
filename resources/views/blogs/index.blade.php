@extends('layout')

@section('content')
    <h1>Blog Posts</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>
    <ul class="list-group mt-3">
        @foreach ($blogs as $blog)
            <li class="list-group-item">
                <a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a>
                <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('blogs.destroy', $blog) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
