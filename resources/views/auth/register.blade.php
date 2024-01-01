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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Name')"  class="mb-1"/>
                                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control"  />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <!-- Email Address -->
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')"  class="mb-1"/>
                                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" 
                                class="form-control"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')"  class="mb-1"/>
                                <x-text-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')"  class="mb-1" />
                                <x-text-input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                           
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            
                            
                        </form>
                        <div class="new-account mt-3">
                            <p>Already have an account?  
                                <a class="text-primary" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </p>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection