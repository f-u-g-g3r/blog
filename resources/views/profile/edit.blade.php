@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-control w-full">
                        <label class="label" for="name">
                            <span class="label-text">Name</span>
                        </label>

                        <input type="text" placeholder="Title" class="input input-bordered w-full" id="name" name="name" value="{{ old('name') ?? auth()->user()->name }}">
                        @error('name')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label class="label" for="email">
                            <span class="label-text">Email</span>
                        </label>

                        <input type="text" placeholder="Title" class="input input-bordered w-full" id="email" name="email" value="{{ old('email') ?? auth()->user()->email }}">
                        @error('email')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>

                    <input type="submit" value="Update" class="btn btn-primary mt-5">
                </form>
            </div>
        </div>
    </div>
@endsection
