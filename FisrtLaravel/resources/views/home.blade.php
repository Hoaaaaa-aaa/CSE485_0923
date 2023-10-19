@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <div class="container">
        <h2>Index Page</h2>
        <form action="{{ route('posts.index') }}" class="mb-3">
            <button type="submit" class="btn btn-primary">Go to Index Page</button>
        </form>
    </div>
@endsection