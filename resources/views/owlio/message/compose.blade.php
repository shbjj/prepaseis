@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<!-- Add Project -->
		<div class="modal fade" id="addProjectSidebar">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Create Project</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal">
						</button>
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
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Compose</a></li>
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
							<div class="compose-content">
								<form action="#">
									@csrf
									<div class="form-group">
										<input type="text" class="form-control bg-transparent" placeholder=" to:">
									</div>
									<div class="form-group">
										<input type="text" class="form-control bg-transparent" placeholder=" Subject:">
									</div>
									<div class="form-group">
										<textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Enter text ..."></textarea>
									</div>
								</form>
								<h5 class="mb-4"><i class="fa fa-paperclip"></i> Attatchment</h5>
								<form action="#" class="dropzone">
									@csrf
									<div class="fallback">
										<input name="file" type="file" multiple>
									</div>
								</form>
							</div>
							<div class="text-start mt-4 mb-3">
								<button class="btn btn-primary btn-sl-sm me-2" type="button"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send</button>
								<button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times" aria-hidden="true"></i></span>Discard</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection