@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <div class="card-actions justify-end">
                    <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
