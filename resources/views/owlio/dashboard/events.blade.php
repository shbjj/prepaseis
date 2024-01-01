@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
			<div class="me-auto  d-lg-block mb-3">
				<h2 class="text-black font-w700 mb-0">Events</h2>
				<p class="mb-0">Lorem ipsum  dolor sit amet </p>
			</div>
			<div class="dropdown custom-dropdown mb-3">
				<div class="btn btn-sm date-ds-btn btn-rounded d-flex align-items-center svg-btn me-3" data-bs-toggle="dropdown">
					<svg class="primary-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.1669 5.83362H21.0003V3.50028C21.0003 3.19087 20.8773 2.89412 20.6585 2.67533C20.4398 2.45653 20.143 2.33362 19.8336 2.33362C19.5242 2.33362 19.2274 2.45653 19.0086 2.67533C18.7898 2.89412 18.6669 3.19087 18.6669 3.50028V5.83362H9.33359V3.50028C9.33359 3.19087 9.21067 2.89412 8.99188 2.67533C8.77309 2.45653 8.47634 2.33362 8.16692 2.33362C7.8575 2.33362 7.56076 2.45653 7.34196 2.67533C7.12317 2.89412 7.00025 3.19087 7.00025 3.50028V5.83362H5.83359C4.90533 5.83362 4.01509 6.20237 3.35871 6.85874C2.70234 7.51512 2.33359 8.40536 2.33359 9.33362V10.5003H25.6669V9.33362C25.6669 8.40536 25.2982 7.51512 24.6418 6.85874C23.9854 6.20237 23.0952 5.83362 22.1669 5.83362Z" fill="#1E33F2"/>
						<path d="M2.33359 22.1669C2.33359 23.0952 2.70234 23.9854 3.35871 24.6418C4.01509 25.2982 4.90533 25.6669 5.83359 25.6669H22.1669C23.0952 25.6669 23.9854 25.2982 24.6418 24.6418C25.2982 23.9854 25.6669 23.0952 25.6669 22.1669V12.8336H2.33359V22.1669Z" fill="#1E33F2"/>
					</svg>
					<div class="text-start ms-3">
						<span class="d-block font-w700">Change period</span>
						<small class="d-block">August 28th - October 28th, 2021</small>
					</div>
					<i class="fa fa-caret-down scale5 ms-3"></i>
				</div>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="#">October 29th - November 29th, 2021</a>
					<a class="dropdown-item" href="#">July 27th - Auguts 27th, 2021</a>
				</div>
			</div>	
			<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addOrderModal"  class="btn btn-primary btn-rounded mb-3"><i class="fa fa-user-plus me-3"></i>New Admission</a>
			<!-- Add Order -->
			<div class="modal fade" id="addOrderModal">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">New Admission</h5>
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
									<label class="text-black font-w500">Join Date</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="text-black font-w500">Id</label>
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
			<div class="col-xl-9 col-xxl-8">
				<div class="card dashboard-calendar shadow-none bg-transparent">
					<div class="card-body p-0 event-calend">
						<div id="calendar" class="app-fullcalendar dashboard-calendar"></div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-4">
				<div class="card">
					<div class="card-header border-0">
						<div>
							<h4 class="font-w700 fs-24 text-black mb-2">Event List</h4>
							<span class="font-w500 fs-16 mb-3">Lorem ipsum dolor sit amet</span>
						</div>
					</div>
					<div class="card-body">
						<div class="mb-3 pb-3 border-bottom position-relative">
							<div class="bg-success event-seprator"></div>
							<div class="d-flex justify-content-between">
								<h5 class="text-primary font-w700">Nov 2th, 2020</h5>
								<div class="dropdown c-pointer ">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#A5A5A5" cx="12" cy="5" r="2"></circle><circle fill="#A5A5A5" cx="12" cy="12" r="2"></circle><circle fill="#A5A5A5" cx="12" cy="19" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">View Detail</a>
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<h4 class="font-w400 mb-0 fs-24 text-black">Movie Night</h4>
							<div class="row justify-content-between align-items-center mt-3">
								<div class="users col-7 d-flex justify-content-start">
									<div class="d-inline-block">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15.109 14.9674L14.2581 15.8183C14.2031 15.8757 14.137 15.9212 14.0639 15.9522C13.9907 15.9831 13.912 15.9988 13.8326 15.9983C13.6726 15.9969 13.5196 15.9322 13.4071 15.8183L11.0017 13.3801C10.946 13.3242 10.902 13.2578 10.872 13.1848C10.8421 13.1118 10.8268 13.0336 10.8271 12.9547V7.29829C10.8271 7.13916 10.8904 6.98655 11.0029 6.87403C11.1154 6.76151 11.268 6.69829 11.4271 6.69829H12.6271C12.7858 6.69971 12.9376 6.76339 13.0498 6.8756C13.162 6.98782 13.2257 7.1396 13.2271 7.29829V11.9619C13.2268 12.0408 13.2421 12.119 13.272 12.192C13.302 12.265 13.346 12.3314 13.4017 12.3874L15.1362 14.1219C15.2443 14.2379 15.302 14.3919 15.2969 14.5503C15.2918 14.7087 15.2242 14.8586 15.109 14.9674ZM11.9999 2.49829C10.1206 2.49829 8.28351 3.05556 6.72094 4.09964C5.15838 5.14371 3.9405 6.62769 3.22133 8.36392C2.50216 10.1002 2.314 12.0107 2.68063 13.8538C3.04726 15.697 3.95222 17.3901 5.28107 18.7189C6.60992 20.0478 8.30298 20.9527 10.1462 21.3194C11.9893 21.686 13.8998 21.4978 15.6361 20.7786C17.3723 20.0595 18.8563 18.8416 19.9003 17.279C20.9444 15.7165 21.5017 13.8794 21.5017 12.0001C21.5017 9.48007 20.5006 7.06325 18.7187 5.28131C16.9367 3.49937 14.5199 2.49829 11.9999 2.49829Z" fill="#A5A5A5"/>
										</svg>
										<span class="fs-14 text-black">07:00 - 10:00 PM</span>
									</div>
								</div>
								<div class="col-5 fs-24 text-black text-end">
									<span>$5.0</span>
								</div>
							</div>		
							<div class="row justify-content-between align-items-center mt-4">
								<div class="users col-7 d-flex justify-content-start">
									<div class="progress mb-0" style="height:7px; width:100%;">
										<div class="progress-bar bg-primary progress-animated" style="width:70%; height:8px;" role="progressbar">
											<span class="sr-only">70% Complete</span>
										</div>
									</div>
								</div>
								<div class="col-5 fs-14 text-end">
									<span>23 ticket left</span>
								</div>
							</div>
						</div>
						<div class="mb-3 pb-3 border-bottom position-relative">
							<div class="bg-danger event-seprator"></div>
							<div class="d-flex justify-content-between">
								<h5 class="text-primary font-w700">Nov 2th, 2020</h5>
								<div class="dropdown c-pointer">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#A5A5A5" cx="12" cy="5" r="2"></circle><circle fill="#A5A5A5" cx="12" cy="12" r="2"></circle><circle fill="#A5A5A5" cx="12" cy="19" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">View Detail</a>
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<h4 class="font-w400 mb-0 fs-24 text-black">Hostage Situation</h4>
							<div class="row justify-content-between align-items-center mt-3">
								<div class="users col-7 d-flex justify-content-start">
									<div class="d-inline-block">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15.109 14.9674L14.2581 15.8183C14.2031 15.8757 14.137 15.9212 14.0639 15.9522C13.9907 15.9831 13.912 15.9988 13.8326 15.9983C13.6726 15.9969 13.5196 15.9322 13.4071 15.8183L11.0017 13.3801C10.946 13.3242 10.902 13.2578 10.872 13.1848C10.8421 13.1118 10.8268 13.0336 10.8271 12.9547V7.29829C10.8271 7.13916 10.8904 6.98655 11.0029 6.87403C11.1154 6.76151 11.268 6.69829 11.4271 6.69829H12.6271C12.7858 6.69971 12.9376 6.76339 13.0498 6.8756C13.162 6.98782 13.2257 7.1396 13.2271 7.29829V11.9619C13.2268 12.0408 13.2421 12.119 13.272 12.192C13.302 12.265 13.346 12.3314 13.4017 12.3874L15.1362 14.1219C15.2443 14.2379 15.302 14.3919 15.2969 14.5503C15.2918 14.7087 15.2242 14.8586 15.109 14.9674ZM11.9999 2.49829C10.1206 2.49829 8.28351 3.05556 6.72094 4.09964C5.15838 5.14371 3.9405 6.62769 3.22133 8.36392C2.50216 10.1002 2.314 12.0107 2.68063 13.8538C3.04726 15.697 3.95222 17.3901 5.28107 18.7189C6.60992 20.0478 8.30298 20.9527 10.1462 21.3194C11.9893 21.686 13.8998 21.4978 15.6361 20.7786C17.3723 20.0595 18.8563 18.8416 19.9003 17.279C20.9444 15.7165 21.5017 13.8794 21.5017 12.0001C21.5017 9.48007 20.5006 7.06325 18.7187 5.28131C16.9367 3.49937 14.5199 2.49829 11.9999 2.49829Z" fill="#A5A5A5"/>
										</svg>
										<span class="fs-14 text-black">07:00 - 10:00 PM</span>
									</div>
								</div>
								<div class="col-5 fs-24 text-black text-end">
									<span>$5.0</span>
								</div>
							</div>		
							<div class="row justify-content-between align-items-center mt-4">
								<div class="users col-7 d-flex justify-content-start">
									<div class="progress mb-0" style="height:7px; width:100%;">
										<div class="progress-bar bg-primary progress-animated" style="width:85%; height:8px;" role="progressbar">
											<span class="sr-only">85% Complete</span>
										</div>
									</div>
								</div>
								<div class="col-5 fs-14 text-end">
									<span>4 ticket left</span>
								</div>
							</div>
						</div>
						<div class="mb-3 pb-3 border-bottom">
							<div class="d-flex justify-content-between">
								<h5 class="text-primary font-w700">Nov 2th, 2020</h5>
								<div class="dropdown c-pointer ">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#A5A5A5" cx="12" cy="5" r="2"></circle><circle fill="#A5A5A5" cx="12" cy="12" r="2"></circle><circle fill="#A5A5A5" cx="12" cy="19" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">View Detail</a>
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<h4 class="font-w400 mb-0 fs-24 text-black">Yard Sale</h4>
							<div class="row justify-content-between align-items-center mt-3">
								<div class="users col-7 d-flex justify-content-start">
									<div class="d-inline-block">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15.109 14.9674L14.2581 15.8183C14.2031 15.8757 14.137 15.9212 14.0639 15.9522C13.9907 15.9831 13.912 15.9988 13.8326 15.9983C13.6726 15.9969 13.5196 15.9322 13.4071 15.8183L11.0017 13.3801C10.946 13.3242 10.902 13.2578 10.872 13.1848C10.8421 13.1118 10.8268 13.0336 10.8271 12.9547V7.29829C10.8271 7.13916 10.8904 6.98655 11.0029 6.87403C11.1154 6.76151 11.268 6.69829 11.4271 6.69829H12.6271C12.7858 6.69971 12.9376 6.76339 13.0498 6.8756C13.162 6.98782 13.2257 7.1396 13.2271 7.29829V11.9619C13.2268 12.0408 13.2421 12.119 13.272 12.192C13.302 12.265 13.346 12.3314 13.4017 12.3874L15.1362 14.1219C15.2443 14.2379 15.302 14.3919 15.2969 14.5503C15.2918 14.7087 15.2242 14.8586 15.109 14.9674ZM11.9999 2.49829C10.1206 2.49829 8.28351 3.05556 6.72094 4.09964C5.15838 5.14371 3.9405 6.62769 3.22133 8.36392C2.50216 10.1002 2.314 12.0107 2.68063 13.8538C3.04726 15.697 3.95222 17.3901 5.28107 18.7189C6.60992 20.0478 8.30298 20.9527 10.1462 21.3194C11.9893 21.686 13.8998 21.4978 15.6361 20.7786C17.3723 20.0595 18.8563 18.8416 19.9003 17.279C20.9444 15.7165 21.5017 13.8794 21.5017 12.0001C21.5017 9.48007 20.5006 7.06325 18.7187 5.28131C16.9367 3.49937 14.5199 2.49829 11.9999 2.49829Z" fill="#A5A5A5"/>
										</svg>
										<span class="fs-14 text-black">07:00 - 10:00 PM</span>
									</div>
								</div>
								<div class="col-5 fs-24 text-black text-end">
									<span>$5.0</span>
								</div>
							</div>		
							<div class="row justify-content-between align-items-center mt-4">
								<div class="users col-7 d-flex justify-content-start">
									<div class="progress mb-0" style="height:7px; width:100%;">
										<div class="progress-bar bg-primary progress-animated" style="width:70%; height:8px;" role="progressbar">
											<span class="sr-only">70% Complete</span>
										</div>
									</div>
								</div>
								<div class="col-5 fs-14 text-end">
									<span>13 ticket left</span>
								</div>
							</div>
						</div>
						<div class="mb-3 pb-3 border-bottom">
							<div class="d-flex justify-content-between">
								<h5 class="text-primary font-w700">Nov 6th, 2020</h5>
								<div class="dropdown c-pointer ">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#A5A5A5" cx="12" cy="5" r="2"></circle><circle fill="#A5A5A5" cx="12" cy="12" r="2"></circle><circle fill="#A5A5A5" cx="12" cy="19" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">View Detail</a>
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<h4 class="font-w400 mb-0 fs-24 text-black">Color Run</h4>
							<div class="row justify-content-between align-items-center mt-3">
								<div class="users col-7 d-flex justify-content-start">
									<div class="d-inline-block">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15.109 14.9674L14.2581 15.8183C14.2031 15.8757 14.137 15.9212 14.0639 15.9522C13.9907 15.9831 13.912 15.9988 13.8326 15.9983C13.6726 15.9969 13.5196 15.9322 13.4071 15.8183L11.0017 13.3801C10.946 13.3242 10.902 13.2578 10.872 13.1848C10.8421 13.1118 10.8268 13.0336 10.8271 12.9547V7.29829C10.8271 7.13916 10.8904 6.98655 11.0029 6.87403C11.1154 6.76151 11.268 6.69829 11.4271 6.69829H12.6271C12.7858 6.69971 12.9376 6.76339 13.0498 6.8756C13.162 6.98782 13.2257 7.1396 13.2271 7.29829V11.9619C13.2268 12.0408 13.2421 12.119 13.272 12.192C13.302 12.265 13.346 12.3314 13.4017 12.3874L15.1362 14.1219C15.2443 14.2379 15.302 14.3919 15.2969 14.5503C15.2918 14.7087 15.2242 14.8586 15.109 14.9674ZM11.9999 2.49829C10.1206 2.49829 8.28351 3.05556 6.72094 4.09964C5.15838 5.14371 3.9405 6.62769 3.22133 8.36392C2.50216 10.1002 2.314 12.0107 2.68063 13.8538C3.04726 15.697 3.95222 17.3901 5.28107 18.7189C6.60992 20.0478 8.30298 20.9527 10.1462 21.3194C11.9893 21.686 13.8998 21.4978 15.6361 20.7786C17.3723 20.0595 18.8563 18.8416 19.9003 17.279C20.9444 15.7165 21.5017 13.8794 21.5017 12.0001C21.5017 9.48007 20.5006 7.06325 18.7187 5.28131C16.9367 3.49937 14.5199 2.49829 11.9999 2.49829Z" fill="#A5A5A5"/>
										</svg>
										<span class="fs-14 text-black">07:00 - 10:00 PM</span>
									</div>
								</div>
								<div class="col-5 fs-24 text-black text-end">
									<span>$0</span>
								</div>
							</div>		
							<div class="row justify-content-between align-items-center mt-4">
								<div class="users col-7 d-flex justify-content-start">
									<div class="progress mb-0" style="height:7px; width:100%;">
										<div class="progress-bar bg-primary progress-animated" style="width:30%; height:8px;" role="progressbar">
											<span class="sr-only">30% Complete</span>
										</div>
									</div>
								</div>
								<div class="col-5 fs-14 text-end">
									<span>17 ticket left</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>	
	</div>	
@endsection