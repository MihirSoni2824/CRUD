@extends('layout')

@section('content')
    <h1>Create Blog</h1>
    <form method="POST" action="{{ route('blogs.store') }}">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
