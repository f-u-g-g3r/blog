@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        {{ $posts->links() }}
        <div class="flex flex-row flex-wrap ">

            @foreach($posts as $post)
                <div class="basis-1/4 mb-5">
                    <div class="card bg-base-200 shadow-xl min-h-full mx-2">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p>{{ $post->snippet }}...</p>
                            <p class="text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
