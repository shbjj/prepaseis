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
            <div>
                <button class="btn btn-primary light btn-rounded btn-circle" style="padding: 6px 0px!important;" id="btn-edit"><i class="fa-solid fa-pencil"></i></button>
            </div>
		</div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profesores.update', $maestro) }}" method="POST" id="form-edit-profesor">
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
                                            <input type="text" name="apellido_paterno" class="form-control-plaintext" placeholder="Apellido Paterno" value="{{ $maestro->apellido_paterno }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Apellido Materno</strong></label>
                                            <input type="text" name="apellido_materno" class="form-control-plaintext" placeholder="Apellido Materno" value="{{ $maestro->apellido_materno }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Nombre</strong></label>
                                            <input type="text" name="nombre" class="form-control-plaintext" placeholder="Nombre" value="{{ $maestro->nombre }}" readonly>
                                        </div>
                                    </div>                                
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Teléfono</strong></label>
                                            <input type="text" name="telefono" class="form-control-plaintext" placeholder="Teléfono" value="{{ $maestro->telefono }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="form-check custom-checkbox mb-3 checkbox-info">
                                            <input type="checkbox" class="form-check-input" {{ $maestro->activo ? 'checked' : '' }} id="activo" name="activo"  value="{{ $maestro->activo ? true : false }}" disabled/>
                                            <label class="form-check-label" for="activo">Activo</label>

                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer footer-btn-guardar" style="display: none;">
                            <div class="col-12">
								<button type="submit" class="btn btn-danger mb-2 btn-cancel-edit" style="margin-right: 25px;">Cancelar</button>

                                <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
	</div>	
	@push('scripts')
    <script>
        $(document).ready( function(){
            $("#btn-edit").on('click', function(){
                var form = $('#form-edit-profesor');

            // Encuentra todos los elementos input con la clase 'form-control-plaintext' que no tengan el nombre 'correo'
                var inputsToReplace = form.find('input.form-control-plaintext');

                // Reemplaza la clase 'form-control-plaintext' por 'form-control' en todos los inputs encontrados
                inputsToReplace.removeClass('form-control-plaintext').addClass('form-control').removeAttr('readonly');
                $("#activo").removeAttr('disabled');

                $(".footer-btn-guardar").fadeIn();
            });
            $(".btn-cancel-edit").on('click', function(){
                location.reload();
            });

            $("#activo").change( function(){
                $(this).val($(this).prop('checked') ? 1 : 0);
            })
        });
    </script>
	@endpush
@endsection


