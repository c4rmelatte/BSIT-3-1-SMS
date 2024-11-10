@extends('layouts.layout')

@section('content')
<section class="d-flex justify-content-center align-items-center">
    <article class="p-4 shadow h-75 w-25 rounded-4">
        <h1 class="text-center mt-5 fw-bold">Register</h1>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST" class="mt-5">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name" required>
                <label for="floatingName">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
                <label for="floatingEmail">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password" required>
                <label for="floatingPasswordConfirm">Confirm Password</label>
            </div>
            <button type="submit" class="fw-bold rounded-4 mt-4 w-100">Register</button>
        </form>

        <p class="fw-semibold text-center mt-2"><small>Already have an account? <a href="{{ route('login') }}">Login here</a></small></p>
    </article>
</section>
@endsection
