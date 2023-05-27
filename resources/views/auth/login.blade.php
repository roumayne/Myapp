@extends('base')

@section('title','Login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="text-center text-muted mb-5 mt-5">Sign in</h1>
            <p class="text-center text-muted mb-3">Tes articles vous attendent</p>
            <form action="{{route('login')}}" method="post">
                @csrf

                @error('email')
                <div class="alert alert-danger text-center" role="alert">
                    {{ $message}}
                </div>
                @enderror

                 @error('password')
                <div class="alert alert-danger text-center" role="alert">
                    {{ $message}}
                </div>
                @enderror

                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3 @error('email')  is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control mb-3 @error('password') is-invalid @enderror" value="{{old('password')}}" required autocomplete="current-password" autofocus>

                <div class="row mb-3">
                    <div class="col mb-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" {{old('remember') ? 'checked': ''}}>
                            <label class="form-check-label" for="remember">Restez connecté</label>
                        </div>
                    </div>

                    <div class="col md-6 text-end">
                        <a href="http://">Mot de passe oublié</a>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                </div>
                <p class="text-center text-muted mt-5">Not registered yet ?<a href="{{route('register')}}"> Create an account</a></p>
            </form>
        </div>
    </div>
</div>
<!--  -->
@endsection
