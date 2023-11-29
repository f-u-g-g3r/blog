@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf

                    <div class="form-control w-full">
                        <label class="label" for="title">
                            <span class="label-text">Email</span>
                        </label>

                        <input type="email" placeholder="Email" class="input input-bordered w-full" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label class="label" for="title">
                            <span class="label-text">Password</span>
                        </label>

                        <input type="password" placeholder="Password" class="input input-bordered w-full" id="password" name="password" />
                        @error('password')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                        @enderror
                    </div>


                    <input type="submit" value="Login" class="btn btn-primary mt-5">
                </form>
            </div>
        </div>
    </div>
@endsection
