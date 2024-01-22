@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control w-full">
                        <label class="label" for="title">
                            <span class="label-text">Title</span>
                        </label>

                        <input type="text" placeholder="Title" class="input input-bordered w-full" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label class="label" for="body">
                            <span class="label-text">Content</span>
                        </label>
                        <textarea class="textarea textarea-bordered h-24 w-full" placeholder="Content" id="body" name="body">{{ old('body') }}</textarea>
                        @error('body')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label class="label" for="image">
                            <span class="label-text">Image</span>
                        </label>

                        <input type="file" class="file-input file-input-bordered w-full" id="image" name="image" />
                        @error('image')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>

                    <input type="submit" value="Create" class="btn btn-primary mt-5">
                </form>
            </div>
        </div>
    </div>
@endsection
