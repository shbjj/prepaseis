@extends('layouts.app')
    @push('styles')
        <script src="https://cdn.tiny.cloud/1/gfwv0xveu58c90be6nw7bmet4v27lhwxx7ogmx7qptgrr3dw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <link href="{{ asset('vendor/select2/css/select2.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/pickadate/themes/default.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/pickadate/themes/default.date.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    @endpush
@section('content')
   
	<div class="container-fluid">
		<div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
			<div class="me-auto  d-lg-block mb-3">
				<h2 class="text-black font-w700 mb-0">Taller</h2>
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
        <form action="{{ route('talleres.create') }}" method="POST" id="form-edit-profesor">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Información</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                 <div class="form-group">
                                                    <label class="mb-1"><strong>Nombre</strong></label>
                                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}" required>
                                                </div>
                                            </div>                                    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Tipo</strong></label>
                                                    <select class="form-control default-select" name="tipo" id="tipo" required>
                                                        <option disabled>Selecciona un Tipo</option>
                                                        @foreach ( ['CIENTIFICO', 'CULTURAL', 'DEPORTIVO'] as $tipo )
                                                        <option value="{{ $tipo }}" {{ old('tipo') == $tipo ? 'selected' : '' }} >{{ $tipo }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>                         
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Estatus</strong></label><br/>
                                                    <select class="form-control default-select" name="estatus" id="estatus" required>
                                                        <option disabled>Selecciona un Estatus</option>
                                                        @foreach ( ['ABIERTO', 'CERRADO', 'EN_CURSO', 'FINALIZADO'] as $estatus )
                                                        <option value="{{ $estatus }}" {{ old('ubicacion') == $estatus ? 'selected' : '' }} >{{ str_replace('_',' ',$estatus) }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Ubicación</strong></label>
                                                    <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación" value="{{ old('ubicacion') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Cupo</strong></label>
                                                    <input type="number" name="cupo" min="1" class="form-control" placeholder="Cupo" value="{{ old('cupo') }}" required>
                                                </div>
                                            </div>                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Semestre</strong></label>
                                                    <input type="text" name="semestre" class="form-control" placeholder="Semestre" value="{{ old('semestre') }}">
                                                </div>
                                            </div>                                 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Instructor</strong></label>
                                                    <select class="form-control default-select" name="instructor" id="instructor" >
                                                        <option>Selecciona un Instructor</option>
                                                        @foreach ( $profesores as $profesor )
                                                        <option value="{{ $profesor }}" {{ old('instructor') == $profesor ? 'selected' : '' }} >{{ $profesor->getNombreCompletoAttribute() }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <hr class="my-4"/>
                                            <h4 class="mb-3"><strong>Fechas</strong></h4>
    
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Rango de Inscripciones</strong></label>
                                                    <input type="text" name="rangoInscripciones" class="form-control input-daterange-timepicker" value="{{ old('ubicacion') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Rango de Clases</strong></label>
                                                    <input type="text" name="rangoClases" class="form-control input-daterange-timepicker" value="{{ old('ubicacion') }}" required>
                                                </div>
                                            </div>

                                            
                                            <hr class="my-4"/>
                                            <h4 class="mb-3"><strong>Horario</strong></h4>
                                            <div id="formulario-container">
                                                <!-- Contenedor para los formularios dinámicos -->
                                                <div class="row mb-3">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="mb-1" ><strong>Día</strong></label>
                                                            <select name="dia[]" class="form-control mdmm" required>
                                                                @foreach ( ['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo'] as $dia )
                                                                    <option value="{{ $dia }}">{{ $dia }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="mb-1" ><strong>Hora inicio</strong></label>
                                                            <input type="time" name="time-start[]" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="mb-1" ><strong>Hora fin</strong></label>
                                                            <input type="time" name="time-end[]" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <span class="btn btn-danger mt-4" style="display: none; cursor: pointer;" onclick="eliminarRenglon(this)"><i class="fa-solid fa-trash-can"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success" onclick="agregarRenglon()">Agregar día</button>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="mb-1" for="summernote"><strong>Descripción</strong></label>
                                            <textarea id="summernote" name="descripcion"></textarea>
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
        <script src="{{asset('vendor\moment\moment.min.js')}}"></script>
        <script src="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('js/plugins-init/select2-init.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.mdmm').selectpicker({
                    noneSelectedText: ''
                });

                tinymce.init({
                    selector: '#summernote', 
                    height: 500        
                });

                $('.input-daterange-timepicker').daterangepicker({
                    timePicker: true,
                    format: 'YYYY/MM/DD',
                    timePickerIncrement: 30,
                    timePicker12Hour: true,
                    timePickerSeconds: false,
                    buttonClasses: ['btn', 'btn-sm'],
                    applyClass: 'btn-danger',
                    cancelClass: 'btn-inverse'
                });

                // Validar que time-start sea menor que time-end
                $('#formulario-container').on('change', 'input[type="time"]', function() {
                    var fila = $(this).closest('.row');
                    var timeStart = fila.find('input[name^="time-start"]').val();
                    var timeEnd = fila.find('input[name^="time-end"]').val();

                    // Convertir a objetos de fecha para comparar
                    var fechaStart = new Date('1970-01-01T' + timeStart + 'Z');
                    var fechaEnd = new Date('1970-01-01T' + timeEnd + 'Z');

                    if (fechaStart >= fechaEnd) {
                        alert('La hora de inicio debe ser menor que la hora de fin.');
                        $(this).val(''); // Limpiar el valor en caso de error
                    }
                });
            });

            function agregarRenglon() {
                // Crea un nuevo row dinámicamente
                var nuevoRenglon = $(`
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="mb-1"><strong>Día</strong></label>
                                <select name="dia[]" class="form-control mdmm" required>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sábado">Sábado</option>
                                    <option value="Domingo">Domingo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-1"><strong>Hora inicio</strong></label>
                                <input type="time" name="time-start[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-1"><strong>Hora fin</strong></label>
                                <input type="time" name="time-end[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <span class="btn btn-danger mt-4" style="cursor: pointer;" onclick="eliminarRenglon(this)"><i class="fa-solid fa-trash-can"></i></span>
                        </div>
                    </div>
                `);

                // Agrega el nuevo row al contenedor
                $('#formulario-container').append(nuevoRenglon);
                $('.mdmm').selectpicker({
                    noneSelectedText: ''
                });
            }
            function eliminarRenglon(boton) {
                // Eliminar el row actual al hacer clic en el botón "Eliminar"
                $(boton).closest('.row').find('select').selectpicker('destroy');
                $(boton).closest('.row').remove();
            }

    
        </script>
	@endpush
@endsection


