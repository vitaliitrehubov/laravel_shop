@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <x-form-wrapper title="Login">
      <p class="mb-3 text-center">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        <form action="{{ route('authenticateUser') }}" method="post">
            @csrf
            <fieldset>
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

                <fieldset class="d-grid">
                    <button class="btn btn-outline-primary">Login</button>
                </fieldset>
            </fieldset>
        </form>
    </x-form-wrapper>
@endsection
