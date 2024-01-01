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
                    <h4 class="text-center mb-4">Confirmar correo</h4>
                    <p>¡Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar por correo electrónico? Si no recibió el correo electrónico, con gusto le enviaremos otro.</p>
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                            <strong>Success!</strong> Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <div class="mt-4 flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Reenviar correo de verificación</button>
                            </div>
                        </form>
                    
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                    
                            <button type="submit" class="btn btn-secondary btn-block">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection