@extends('layouts.guest')
@section('content')

<div class="col-md-6">
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <img src="{{ asset('images/logo-full.png')}}" alt="">
                    </div>
                    <h4 class="text-center mb-4">Sign in your account</h4>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                        <div class="row d-flex justify-content-between mt-4 mb-2">
                            <div class="form-group">
                               <div class="form-check custom-checkbox ms-1">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                    <label class="form-check-label" for="remember_me">Remember my preference</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="form-group">
                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
                            @endif
                            
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                        </div>
                    </form>
                    <div class="new-account mt-3">
                        <p>Don't have an account? <a class="text-primary" href="{{ route('register')}}">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection