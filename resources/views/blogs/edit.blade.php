@extends('layout')

@section('content')
    <h1>Edit Blog</h1>
    <form method="POST" action="{{ route('blogs.update', $blog) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control">{{ $blog->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
