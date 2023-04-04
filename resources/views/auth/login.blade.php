@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="card bg-white text-white" style="border-radius: 2rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="text-dark fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-dark mb-5">Please enter your login and password!</p>


                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-dark text-md-end">{{ __('Email Address') }}</label>


                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-dark text-md-end">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label text-dark " for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>

                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-2">
                                                <button type="submit" class="btn btn btn-lg btn-block" type="submit"
                                                    style="background-color: #9c6d5a;height: 37px;width: 120px;padding: 0; color:white;border-radius: 7px;">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div>
                                <p class="text-dark">Not a Member? <a href="{{ route('register') }}">{{ __('SignUp') }}</a>
                                </p>



                                  {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('SignUp') }}</a>
                                </li>
                            @endif
                            </div> --}}





                        {{-- @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"> <i class="bi bi-person-circle "
                                    style="font-size: 20px; color: #865846;"></i> </a>
                        </li>
                    @endif --}}




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
