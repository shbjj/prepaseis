@extends('layouts.app')


@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Importar Alumnos desde Excel</h4>
        </div>
            <div class="card-body">
                @if ( session()->has('status') )
                    <div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                        <strong>Success!</strong> {{ session()->pull('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif

                @if(Session::has('import_errors'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach(Session::get('import_errors') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('alumnos.importar') }}" enctype="multipart/form-data">
                    <div class="mb-3" id="container-form-alumnos" style="display: none;">
                        
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Matricula</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Carrera</th>
                                            <th scope="col">Plan</th>
                                            <th scope="col">Grupo</th>
                                            <th scope="col">Fech. Nacimiento</th>
                                            <th scope="col">C.U.R.P.</th>
                                            <th scope="col">Sexo</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Municipio</th>
                                            <th scope="col">C.P.</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center" >
                                <button type="submit" class="btn btn-primary btn-block mt-2">
                                    Importar Alumnos
                                </button>
                            </div>
                            

                        
                    </div>
                    <div class="mb-3" id="container-file">
                        <label for="inputFile" class="form-label">Seleccione un archivo de Excel</label>
                        <input class="form-control form-control-sm" id="inputFile" name="import_file" type="file">
                    </div>                    
                </form>
            </div>
    </div>
</div>

@push('scripts')
        <!-- Utilizando CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
         <!-- Include Handlebars from a CDN -->
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>


        <script>
            $(document).ready(function () {
            $('#inputFile').change(function (e) {
                var dataRows = [];
                var file = e.target.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var data = new Uint8Array(e.target.result);
                        var workbook = XLSX.read(data, { type: 'array' });

                        // Obtener la primera hoja del libro de Excel
                        var sheet = workbook.Sheets[workbook.SheetNames[0]];
                        // Obtener el rango de celdas de la hoja de cálculo
                        var range = XLSX.utils.decode_range(sheet['!ref']);
                        // Obtener las celdas del encabezado
                        var headers = [];
                        
                        for (var i = range.s.c; i <= range.e.c; i++) {
                            var cellAddress = XLSX.utils.encode_cell({ r: range.s.r, c: i });
                            var cellValue = sheet[cellAddress] ? sheet[cellAddress].v : '';
                            headers.push(cellValue.trim());
                        }

                        // Definir las columnas que quieres obtener
                        var columnasDeseadas = [
                            'Matricula', 'Nombre', 'Apellido Paterno', 'Apellido Materno',
                            'Estatus', 'Carrera', 'Plan de Estudios', 'Grupo',
                            'Grado', 'Fecha de Nacimiento', 'CURP', 'Sexo',
                            'Estado', 'Municipio', 'CP'
                        ];

                        // Mapear los valores de las filas solo para las columnas deseadas
                        for (var row = 1; row <= XLSX.utils.decode_range(sheet['!ref']).e.r; row++) {
                            var rowData = {};
                            for (var col = 0; col < columnasDeseadas.length; col++) {
                                var header = columnasDeseadas[col];
                                var cellAddress = XLSX.utils.encode_cell({ r: row, c: headers.indexOf(header) });
                                var cellValue = sheet[cellAddress] ? sheet[cellAddress].v : '';

                                // Convertir la fecha de nacimiento a un objeto de fecha
                                if (header === 'Fecha de Nacimiento') {
                                    cellValue = excelSerialToDate(cellValue);
                                }

                                rowData[header] = cellValue;
                            }
                            dataRows.push(rowData);
                        }

                        // Iterar sobre los datos y construir filas HTML
                        $.each(dataRows, function(index, student) {
                            console.log(student)
                            var row = $('<tr>');
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student.Matricula + '" />' + student.Matricula));
                            row.append($('<td>').html(
                                '<input type="hidden" name="" value="' + student.Nombre + '" />' +
                                '<input type="hidden" name="" value="' + student['Apellido Materno'] + '" />' +
                                '<input type="hidden" name="" value="' + student['Apellido Paterno'] + '" />'
                                + student.Nombre + " " + student['Apellido Materno'] + " " + student['Apellido Paterno']
                            ));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student.Estatus + '" />' + student.Estatus));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student.Carrera + '" />' + student.Carrera));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student['Plan de Estudios'] + '" />' 
                                + student['Plan de Estudios']));
                            row.append($('<td>').html(
                                '<input type="hidden" name="" value="' + student.Grado + '" />' +
                                '<input type="hidden" name="" value="' + student.Grupo + '" />' +
                                student.Grado + "° " + student.Grupo
                            ));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + moment(student["Fecha de Nacimiento"]).format('DD/MM/YYYY') + '" />'+ moment(student["Fecha de Nacimiento"]).format('DD/MM/YYYY')));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student.CURP +'" />' + student.CURP));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student.Sexo +'" />'+ student.Sexo));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student.Estado +'" />'+ student.Estado));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student.Municipio +'" />'+ student.Municipio));
                            row.append($('<td>').html('<input type="hidden" name="" value="' + student.CP +'" />'+ student.CP))

                            // Agrega más campos según sea necesario

                            // Agregar la fila al contenedor
                            $('#tbody').append(row);
                        });
                        // Mostrar los resultados en la consola
                        console.log(dataRows);
                        if(dataRows.length > 0){
                            $("#container-form-alumnos").fadeIn();
                        } else {
                            $("#container-form-alumnos").fadeOut();
                        }
                    };

                    reader.readAsArrayBuffer(file);
                } else {
                    $("#container-form-alumnos").fadeOut();
                }
            });
        });

        // Función para convertir el número serial de Excel a fecha de JavaScript
        function excelSerialToDate(serial) {
            try {
                var utc_days = Math.floor(serial - 25569);
                var utc_value = utc_days * 86400;
                var date_info = new Date(utc_value * 1000);

                // Ajuste para compensar la diferencia de zona horaria y un día adicional
                date_info.setUTCDate(date_info.getUTCDate() + 1);

                return date_info;
            } catch (error) {
                // En caso de error, devolver una nueva fecha predeterminada
                return new Date('1900-01-01');
            }
        }
        
        </script>
    @endpush
@endsection



