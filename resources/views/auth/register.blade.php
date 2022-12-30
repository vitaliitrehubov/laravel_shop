@extends('layouts.master')

@section('title', 'Register')

@section('content')
    <x-form-wrapper title="Register">
        <p class="mb-3 text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
        <form action="{{ route('createUser') }}" method="post">
            @csrf
            <fieldset>
                <fieldset class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror" required />
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" required />
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" required />
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="form-control @error('password_confirmation') is-invalid @enderror" required />
                    @error('password_confirmation')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="d-grid">
                    <button class="btn btn-outline-primary">Register</button>
                </fieldset>
            </fieldset>
        </form>
    </x-form-wrapper>
@endsection
