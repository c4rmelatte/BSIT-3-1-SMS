@extends('layouts.layout')
@section('content')

<style>
     section {
        height: 100vh;
        width: 100vw;
        background: #37584f;
        overflow: hidden;
     }
     section article {
        background-color: #f3f2ed;
     }

     section h1, p, a, button {
        color: #37584f;
     }
     button {
        background: #e8ce83;
        border: none;
        padding: .7em;
     }
     a {
        text-decoration: none;
     }
</style>
<section class="d-flex justify-content-center align-items-center">
    <article class="p-4 shadow h-75 w-25 rounded-4">
        <h1 class="text-center mt-5 fw-bold">Login</h1>

        <!-- form -->
        <form action="{{ route('login.submit') }}" method="POST" class="mt-5">
            @csrf
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <p class="fw-semibold mt-3 text-end"><small><a href="">Forget Password?</a></small></p>
            <button type="submit" class="fw-bold rounded-4 mt-4 w-100">
                LOGIN
            </button>
        </form>

        <p class="fw-semibold text-center mt-2"><small>New here? Create an account</small></p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </article>
</section>
@endsection
