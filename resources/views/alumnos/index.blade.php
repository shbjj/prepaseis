@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
			<div class="me-auto  d-lg-block mb-3">
				<h2 class="text-black font-w700 mb-0">Alumnos</h2>
				<p class="mb-0">Lista de Alumnos </p>
			</div>
			<!--<div class="dropdown custom-dropdown mb-3">
				<input type="hidden" value="" id="tipoBusqueda"/>
				<div class="btn btn-sm date-ds-btn btn-rounded d-flex align-items-center svg-btn me-3" data-bs-toggle="dropdown">
					<svg class="primary-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.1669 5.83362H21.0003V3.50028C21.0003 3.19087 20.8773 2.89412 20.6585 2.67533C20.4398 2.45653 20.143 2.33362 19.8336 2.33362C19.5242 2.33362 19.2274 2.45653 19.0086 2.67533C18.7898 2.89412 18.6669 3.19087 18.6669 3.50028V5.83362H9.33359V3.50028C9.33359 3.19087 9.21067 2.89412 8.99188 2.67533C8.77309 2.45653 8.47634 2.33362 8.16692 2.33362C7.8575 2.33362 7.56076 2.45653 7.34196 2.67533C7.12317 2.89412 7.00025 3.19087 7.00025 3.50028V5.83362H5.83359C4.90533 5.83362 4.01509 6.20237 3.35871 6.85874C2.70234 7.51512 2.33359 8.40536 2.33359 9.33362V10.5003H25.6669V9.33362C25.6669 8.40536 25.2982 7.51512 24.6418 6.85874C23.9854 6.20237 23.0952 5.83362 22.1669 5.83362Z" fill="#1E33F2"/>
						<path d="M2.33359 22.1669C2.33359 23.0952 2.70234 23.9854 3.35871 24.6418C4.01509 25.2982 4.90533 25.6669 5.83359 25.6669H22.1669C23.0952 25.6669 23.9854 25.2982 24.6418 24.6418C25.2982 23.9854 25.6669 23.0952 25.6669 22.1669V12.8336H2.33359V22.1669Z" fill="#1E33F2"/>
					</svg>
					<div class="text-start ms-3">
						<span class="d-block font-w700">Tipo de Alumnos</span>
						<small class="d-block">Inscritos</small>
					</div>
					<i class="fa fa-caret-down scale5 ms-3"></i>
				</div>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="#">October 29th - November 29th, 2021</a>
					<a class="dropdown-item" href="#">July 27th - Auguts 27th, 2021</a>
				</div>
			</div>	
			<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addOrderModal" class="btn btn-primary btn-rounded mb-3"><i class="fa fa-user-plus me-3"></i>New Admission</a>
			<!-- Add Order -->
			<div class="modal fade" id="addOrderModal">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Admission Open</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<form>
								@csrf
								<div class="form-group">
									<label class="text-black font-w500">Student Name</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="text-black font-w500">Student id</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="text-black font-w500">Date Join</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="text-black font-w500">City</label>
									<input type="text" class="form-control">
								</div>
								
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="table-responsive ">
					<table class="table table-responsive-lg mb-4 dataTablesCard card-table text-black" id="example5">
						<thead>
							<tr>
								<!--<th>
									<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="checkAll">
									<label class="form-check-label" for="checkAll">
									
									</label>
									</div>
								</th>-->
								<th></th>
								<th>Matricula</th>
								<th>Nombre</th>
								<th>Estatus</th>
								<th>Grado</th>
								<th>Telefono</th>
								<th class="float-end">Action</th>
							</tr>
						</thead>
						<tbody>
                            @if ($alumnos->count())
                            @foreach ($alumnos as $alumno)
                                <tr>
                                    <!--<td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">
                                        </label>
                                        </div>
                                    </td>-->
                                    <td class="text-center"><a href="{{ route('alumnos.edit', $alumno) }}" target="_blank"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                                    <td>{{ $alumno->matricula }}</td>
                                    <td>
                                        <div class="media d-flex align-items-center">
                                            <img src="{{ asset('images/table/1.jpg')}}" class="rounded me-2" width="50" alt="">
                                            <div class="media-body text-nowrap">
                                                <h6 class="text-black font-w600 fs-16 mb-0">{{ $alumno->getNombreCompletoAttribute() }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $alumno->estatus }}</td>
                                    <td>{{ $alumno->grado . "° " . $alumno->grupo }}</td>
                                    <td>{{ $alumno->telefono }}</td>
                                    <td>
                                        <div class="dropdown float-end custom-dropdown c-pointer mb-0">
                                            <div class="" data-bs-toggle="dropdown">
                                                <svg class="primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                                
                            @else
								<tr>
									<td colspan="6" class="text-center"><strong>No hay alumnos</strong></td>
								</tr>
                            @endif
							
							
						</tbody>
					</table>

					@if ($alumnos->count())
						<div> {{ $alumnos->links('pagination::bootstrap-5') }} </div>
					@endif
				</div>
			</div>
		</div>
	</div>	
	@push('scripts')
		<script>
			$(document).ready(function () {
					// Manejar el evento de clic en los enlaces de paginación
					$('.pagination a').on('click', function (event) {
						event.preventDefault();

						// Obtener el valor del input de tipoBusqueda
						var tipoBusquedaValue = $('#tipoBusqueda').val();

						// Obtener la URL del enlace de paginación
						var nextPageUrl = $(this).attr('href');

						// Construir la nueva URL con el valor de tipoBusqueda
						var newUrl = nextPageUrl + (nextPageUrl.includes('?') ? '&' : '?') + 'tipoBusqueda=' + tipoBusquedaValue;

						// Redirigir a la nueva URL
						window.location.href = newUrl;
					});
				});
		</script>
	@endpush
@endsection


