@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<!-- Add Project -->
		<div class="modal fade" id="addProjectSidebar">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Create Project</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>
					<div class="modal-body">
						<form>
							@csrf
							<div class="form-group">
								<label class="text-black font-w500">Project Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label class="text-black font-w500">Deadline</label>
								<input type="date" class="form-control">
							</div>
							<div class="form-group">
								<label class="text-black font-w500">Client Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary">CREATE</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Hi, welcome back!</h4>
					<span>Email</span>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Inbox</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="email-left-box px-0 mb-3">
							<div class="p-0">
								<a href="{{ url('email-compose')}}" class="btn btn-primary btn-block">Compose</a>
							</div>
							<div class="mail-list rounded mt-4">
								<a href="{{ url('email-inbox')}}" class="list-group-item active"><i
										class="fa fa-inbox font-18 align-middle me-2"></i> Inbox <span
										class="badge badge-secondary badge-sm float-end">198</span> </a>
								<a href="javascript:void()" class="list-group-item"><i
										class="fa fa-paper-plane font-18 align-middle me-2"></i>Sent</a> <a href="javascript:void()" class="list-group-item"><i
										class="fa-regular fa-star font-18 align-middle me-2"></i>Important <span
										class="badge badge-danger text-white badge-sm float-end">47</span>
								</a>
								<a href="javascript:void()" class="list-group-item"><i
										class="mdi mdi-file-document-box font-18 align-middle me-2"></i>Draft</a><a href="javascript:void()" class="list-group-item"><i
										class="fa fa-trash font-18 align-middle me-2"></i>Trash</a>
							</div>
							<div class="mail-list mt-4 rounded overflow-hidden">
								<div class="intro-title m-0 d-flex justify-content-between">
									<h5>Categories</h5>
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</div>
								<a href="{{ url('email-inbox')}}" class="list-group-item"><span class="icon-warning"><i
											class="fa fa-circle" aria-hidden="true"></i></span>
									Work </a>
								<a href="{{ url('email-inbox')}}" class="list-group-item"><span class="icon-primary"><i
											class="fa fa-circle" aria-hidden="true"></i></span>
									Private </a>
								<a href="{{ url('email-inbox')}}" class="list-group-item"><span class="icon-success"><i
											class="fa fa-circle" aria-hidden="true"></i></span>
									Support </a>
								<a href="{{ url('email-inbox')}}" class="list-group-item"><span class="icon-dpink"><i
											class="fa fa-circle" aria-hidden="true"></i></span>
									Social </a>
							</div>
						</div>
						<div class="email-right-box ms-0 ms-sm-4 ms-sm-0">
							<div role="toolbar" class="toolbar ms-1 ms-sm-0">
								<div class="btn-group mb-1">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="checkAll">
										<label class="form-check-label" for="checkAll">
									
									</label>
									</div>
								</div>
								<div class="btn-group mb-1">
									<button class="btn btn-primary light px-3" type="button"><i class="ti-reload"></i>
									</button>
								</div>
								<div class="btn-group mb-1">
									<button aria-expanded="false" data-bs-toggle="dropdown" class="btn btn-primary px-3 light dropdown-toggle" type="button">More <span
											class="caret"></span>
									</button>
									<div class="dropdown-menu"> <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a> <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>
										<a href="javascript: void(0);" class="dropdown-item">Add Star</a> <a href="javascript: void(0);" class="dropdown-item">Mute</a>
									</div>
								</div>
							</div>
							<div class="email-list mt-3">
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check1">
												<label class="form-check-label" for="check1">
												
												</label>
												</div>
											</div>
									
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="check2">
													<label class="form-check-label" for="check2">
													
													</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check3">
												<label class="form-check-label" for="check3">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check4">
												<label class="form-check-label" for="check4">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check5">
												<label class="form-check-label" for="check5">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check6">
												<label class="form-check-label" for="check6">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check7">
												<label class="form-check-label" for="check7">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message unread">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check8">
												<label class="form-check-label" for="check8">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message unread">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check9">
												<label class="form-check-label" for="check9">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check10">
												<label class="form-check-label" for="check10">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check11">
												<label class="form-check-label" for="check11">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check12">
												<label class="form-check-label" for="check12">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check13">
												<label class="form-check-label" for="check13">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message unread">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check14">
												<label class="form-check-label" for="check14">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check15">
												<label class="form-check-label" for="check15">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check16">
												<label class="form-check-label" for="check16">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check17">
												<label class="form-check-label" for="check17">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check18">
												<label class="form-check-label" for="check18">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message unread">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check19">
												<label class="form-check-label" for="check19">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="pl-1 align-self-center">
												<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="check20">
												<label class="form-check-label" for="check20">
												
												</label>
												</div>
											</div>
											<div class="ms-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-star" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="{{ url('email-read')}}" class="col-mail col-mail-2">
											<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
											<div class="date">11:49 am</div>
										</a>
									</div>
								</div>
							</div>
							<!-- panel -->
							<div class="row mt-4">
								<div class="col-12 pl-3">
									<nav>
										<ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
											<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-left"></i></a></li>
											<li class="page-item "><a class="page-link" href="javascript:void()">1</a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
											<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection

@push('scripts')
	<script>
		$(".fa.fa-star").click(function () {
		$(this).toggleClass("yellow");
		});
	</script>
@endpush