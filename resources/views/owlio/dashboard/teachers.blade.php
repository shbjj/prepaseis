@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="form-head d-flex flex-wrap mb-sm-4 align-items-start">
			<div class="me-auto mb-2 d-lg-block mb-3">
				<h2 class="text-black font-w700 mb-0">Teachers</h2>
				<p class="mb-0">Lorem ipsum  dolor sit amet </p>
			</div>
			<div class="dashboard_bar mb-3">
			
				<div class="input-group search-area right d-lg-inline-flex d-none me-5">
				<input type="text" class="form-control" placeholder="Search here" aria-label="Username" aria-describedby="header-search1">
				<span class="input-group-text" id="header-search1">
						<a href="javascript:void(0);">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#A4A4A4"></path></svg>
						</a>
				</span>
				</div>
			</div>
			<select class=" form-control default-select style-3 mb-3 me-3">
				<option>Newest</option>
				<option>Old</option>
				<option>Cuurent</option>
			</select>
			<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addOrderModal"  class="btn btn-primary btn-rounded mb-3"><i class="fa fa-user-plus me-3"></i>New Teacher</a>
			<!-- Add Order -->
			<div class="modal fade" id="addOrderModal">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Teacher</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<form>
								@csrf
								<div class="form-group">
									<label class="text-black font-w500">Teacher Name</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="text-black font-w500">Subject</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="text-black font-w500">Phone No.</label>
									<input type="number" class="form-control">
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
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/1.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Abdul Kean</a></h6>
								<p class="fs-14 mb-1">Matemathics</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/2.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Angela Moss</a></h6>
								<p class="fs-14 mb-1">Science</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/3.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Afiff Skunder</a></h6>
								<p class="fs-14 mb-1">English</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/4.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Anita Queen</a></h6>
								<p class="fs-14 mb-1">Matemathics</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>	
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/5.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Abgail Smut</a></h6>
								<p class="fs-14 mb-1">Science</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/6.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Bella Syuqr</a></h6>
								<p class="fs-14 mb-1">Programmer</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/7.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Bella Poco</a></h6>
								<p class="fs-14 mb-1">Grahic Design</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/8.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Benny Gacu</a></h6>
								<p class="fs-14 mb-1">Science</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/10.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Chloe Simat</a></h6>
								<p class="fs-14 mb-1">Chemistry</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/11.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Denny Juan</a></h6>
								<p class="fs-14 mb-1">Business Management</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/12.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Franklin CS</a></h6>
								<p class="fs-14 mb-1">Programmer</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/13.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Freddy John</a></h6>
								<p class="fs-14 mb-1">Matemathics</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/14.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Fanny Saragih</a></h6>
								<p class="fs-14 mb-1">Computer Math</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/15.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Hermanto</a></h6>
								<p class="fs-14 mb-1">English</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/16.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Lulu Salam</a></h6>
								<p class="fs-14 mb-1">Science</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card contact-bx hvr">	
					<div class="card-body">
						<div class="media">
							<div class="image-bx me-3">
								<img src="{{ asset('images/users/17.jpg')}}" alt="" class="rounded-circle" width="90">
								<span class="active"></span>
							</div>
							<div class="media-body">
								<h6 class="font-w700"><a href="{{ url('app-profile')}}" class="text-black">Sukawati</a></h6>
								<p class="fs-14 mb-1">Business Management</p>
								<div class="contact-footer">
									<a href="javascript:void(0)" >View Profile</a>
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>			
		</div>	
		<nav aria-label="Page navigation example">
			<ul class="pagination pagination-circle ">
				<li class="page-item page-indicator">
					<a class="page-link" href="javascript:void(0)">
						<i class="la la-angle-left"></i></a>
				</li>
				<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
				</li>
				<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
				<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
				<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
				<li class="page-item page-indicator">
					<a class="page-link" href="javascript:void(0)">
						<i class="la la-angle-right"></i></a>
				</li>
			</ul>
		</nav>
	</div>
@endsection	