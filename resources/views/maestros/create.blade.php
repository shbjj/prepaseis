@extends('layouts.app')
 @push('styles')
       
    @endpush
@section('content')
   
	<div class="container-fluid">
		<div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
			<div class="me-auto  d-lg-block mb-3">
				<h2 class="text-black font-w700 mb-0">Profesor</h2>
				<p class="mb-0">{{ $page_title }}</p>
			</div>
		</div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profesores.create') }}" method="POST" id="form-edit-profesor">
            @csrf
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Información Personal</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Apellido Paterno</strong></label>
                                            <input type="text" name="apellido_paterno" class="form-control" placeholder="Apellido Paterno" value="{{ old('apellido_paterno') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Apellido Materno</strong></label>
                                            <input type="text" name="apellido_materno" class="form-control" placeholder="Apellido Materno" value="{{ old('apellido_materno') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Nombre</strong></label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}">
                                        </div>
                                    </div>                                
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Teléfono</strong></label>
                                            <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ old('telefono') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer footer-btn-guardar">
                            <div class="col-12">
								<button type="reset" class="btn btn-danger mb-2 btn-cancel-edit" style="margin-right: 25px;">Limpiar</button>

                                <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
	</div>	
	@push('scripts')
    
	@endpush
@endsection


