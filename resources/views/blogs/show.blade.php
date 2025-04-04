@extends('layout')

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back</a>
@endsection
