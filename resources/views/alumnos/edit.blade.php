@extends('layouts.app')
 @push('styles')
        <link href="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('http://127.0.0.1:30002/vendor/pickadate/themes/default.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('http://127.0.0.1:30002/vendor/pickadate/themes/default.date.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    @endpush
@section('content')
   
	<div class="container-fluid">
		<div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
			<div class="me-auto  d-lg-block mb-3">
				<h2 class="text-black font-w700 mb-0">Alumno</h2>
				<p class="mb-0">{{ $alumno->getNombreCompletoAttribute() }}</p>
			</div>
            <div>
                <button class="btn btn-primary light btn-rounded btn-circle" style="padding: 6px 0px!important;" id="btn-edit"><i class="fa-solid fa-pencil"></i></button>
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
        <form action="{{ route('alumnos.update', $alumno) }}" method="POST" id="form-edit-alumno">
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
                                            <input type="text" name="apellido_paterno" class="form-control-plaintext" placeholder="Apellido Paterno" value="{{ $alumno->apellido_paterno }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Apellido Materno</strong></label>
                                            <input type="text" name="apellido_materno" class="form-control-plaintext" placeholder="Apellido Materno" value="{{ $alumno->apellido_materno }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Nombre</strong></label>
                                            <input type="text" name="nombre" class="form-control-plaintext" placeholder="Nombre" value="{{ $alumno->nombre }}" readonly>
                                        </div>
                                    </div>                                
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>CURP</strong></label>
                                            <input type="text" name="curp" class="form-control-plaintext" placeholder="CURP" value="{{ $alumno->curp }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Fecha de Nacimiento</strong></label>
                                            <input type="text" name="fecha_nacimiento" class="form-control-plaintext" id="fecha_nacimiento" value="{{ $alumno->fecha_nacimiento }}" readonly>
                                        </div>
                                    </div>
                                    <hr class="my-4"/>
                                    <h4 class="mb-3"><strong>Dirección</strong></h4>
    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Estado</strong></label>
                                            <input type="text" name="estado" class="form-control-plaintext" placeholder="Telefono" value="{{ $alumno->estado }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Municipio</strong></label>
                                            <input type="text" name="municipio" class="form-control-plaintext" placeholder="Municipio" value="{{ $alumno->municipio }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>CP</strong></label>
                                            <input type="text" name="cp" class="form-control-plaintext" placeholder="CP" value="{{ $alumno->cp }}" readonly>
                                        </div>
                                    </div>
    
                                    <hr class="my-4"/>
                                    <h4 class="mb-3"><strong>Contacto</strong></h4>
    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Teléfono</strong></label>
                                            <input type="text" name="telefono" class="form-control-plaintext" placeholder="Teléfono" value="{{ $alumno->telefono }}" readonly>
                                        </div>
                                    </div><div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Correo electrónico</strong></label>
                                            <div class="mt-3">{{ optional($alumno->user)->email ?? 'N/A' }}</div>
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
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Información Academica</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Matricula</strong></label>
                                            <input type="text" name="matricula" class="form-control-plaintext" placeholder="Matricula" value="{{ $alumno->matricula }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 ">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Grado</strong></label>
                                            <input type="number" name="grado" min="1" class="form-control-plaintext" placeholder="Grado" value="{{ $alumno->grado }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 ">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Grupo</strong></label>
                                            <input type="text" name="grupo" class="form-control-plaintext" placeholder="Grupo" value="{{ $alumno->grupo }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Estatus</strong></label>
                                            <select class="form-control" name="estatus" style="display: none;" id="select-estatus">
                                                @foreach (['INSCRITO', 'RECURSADOR', 'EGRESADO','BAJA_DEFINITIVA','BAJA_TEMPORAL'] as $estatus)
                                                    <option value="{{ $estatus }}" {{ $estatus == $alumno->estatus ? 'Si son iguales' : 'No son iguales' }}>{{ $estatus }}</option>
                                                @endforeach
                                            </select>
                                            <div class="mt-3" id="status-div">{{ $alumno->estatus }}</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Carrera</strong></label>
                                            <input type="text" name="carrera" class="form-control-plaintext" placeholder="Carrera" value="{{ $alumno->carrera }}" readonly>
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
        <script src="{{asset('vendor\moment\moment.min.js')}}"></script>
        <script src="{{ asset('vendor\bootstrap-material-datetimepicker\js\bootstrap-material-datetimepicker.js') }}"></script>
		<script>
            $(document).ready( function(){
                $("#btn-edit").on('click', function(){
                    var form = $('#form-edit-alumno');

                // Encuentra todos los elementos input con la clase 'form-control-plaintext' que no tengan el nombre 'correo'
                    var inputsToReplace = form.find('input.form-control-plaintext:not([name="correo"])');

                    // Reemplaza la clase 'form-control-plaintext' por 'form-control' en todos los inputs encontrados
                    inputsToReplace.removeClass('form-control-plaintext').addClass('form-control').removeAttr('readonly');

                    $("#select-estatus").fadeIn();
                    $(".footer-btn-guardar").fadeIn();
                    $("#status-div").hide();
                    $('#fecha_nacimiento').bootstrapMaterialDatePicker({
                            weekStart: 0,
                            time: false
                        });
                });
                $(".btn-cancel-edit").on('click', function(){
                    location.reload();
                });
            });
		</script>
	@endpush
@endsection


