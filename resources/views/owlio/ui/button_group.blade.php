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
					<span>Button Group</span>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Button Group</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header d-block">
						<h4 class="card-title">Button group</h4>
						<p class="mb-0 subtitle">Default Button group style</p>
					</div>
					<div class="card-body">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Left</button>
							<button type="button" class="btn btn-primary">Middle</button>
							<button type="button" class="btn btn-primary">Right</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header d-block">
						<h4 class="card-title">Button toolbar</h4>
						<p class="mb-0 subtitle">Default Button toolbar style</p>
					</div>
					<div class="card-body">
						<div class="btn-group me-2 mb-2">
							<button type="button" class="btn btn-primary">1</button>
							<button type="button" class="btn btn-primary">2</button>
							<button type="button" class="btn btn-primary">3</button>
							<button type="button" class="btn btn-primary">4</button>
						</div>
						<div class="btn-group me-2 mb-2">
							<button type="button" class="btn btn-primary">5</button>
							<button type="button" class="btn btn-primary">6</button>
							<button type="button" class="btn btn-primary">7</button>
						</div>
						<div class="btn-group mb-2">
							<button type="button" class="btn btn-primary">8</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header d-block">
						<h4 class="card-title">Button Sizing</h4>
						<p class="mb-0 subtitle">Default button size style</p>
					</div>
					<div class="card-body">
						<div class="btn-group mb-2 btn-group-lg">
							<button class="btn btn-primary" type="button">Left</button>
							<button class="btn btn-primary" type="button">Middle</button>
							<button class="btn btn-primary" type="button">Right</button>
						</div>
						<div class="btn-group mb-2">
							<button class="btn btn-primary" type="button">Left</button>
							<button class="btn btn-primary" type="button">Middle</button>
							<button class="btn btn-primary" type="button">Right</button>
						</div>
						<div class="btn-group mb-2 btn-group-sm">
							<button class="btn btn-primary" type="button">Left</button>
							<button class="btn btn-primary" type="button">Middle</button>
							<button class="btn btn-primary" type="button">Right</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header d-block">
						<h4 class="card-title">Button Nesting</h4>
						<p class="mb-0 subtitle">Default button nesting style</p>
					</div>
					<div class="card-body">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">1</button>
							<button type="button" class="btn btn-primary">2</button>
							<div class="btn-group">
								<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
								<div class="dropdown-menu"><a class="dropdown-item" href="javascript:void()">Dropdown link</a>
									<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header d-block">
						<h4 class="card-title">Vertical variation</h4>
						<p class="mb-0 subtitle">Default button vertical variation style</p>
					</div>
					<div class="card-body">
						<div class="btn-group-vertical">
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-primary" type="button">Button</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header d-block">
						<h4 class="card-title">Vertical dropdown variation</h4>
						<p class="mb-0 subtitle">Default button vertical variation style</p>
					</div>
					<div class="card-body">
						<div aria-label="Vertical button group" role="group" class="btn-group-vertical">
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-primary" type="button">Button</button>
							<div role="group" class="btn-group">
								<button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
								<div class="dropdown-menu"><a href="javascript:void()" class="dropdown-item">Dropdown link</a>
									<a href="javascript:void()" class="dropdown-item">Dropdown link</a>
								</div>
							</div>
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-primary" type="button">Button</button>
							<div role="group" class="btn-group">
								<button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
								<div class="dropdown-menu"><a href="javascript:void()" class="dropdown-item">Dropdown link</a>
									<a href="javascript:void()" class="dropdown-item">Dropdown link</a>
								</div>
							</div>
							<div role="group" class="btn-group">
								<button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
								<div class="dropdown-menu"><a href="javascript:void()" class="dropdown-item">Dropdown link</a>
									<a href="javascript:void()" class="dropdown-item">Dropdown link</a>
								</div>
							</div>
							<div role="group" class="btn-group">
								<button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
								<div class="dropdown-menu"><a href="javascript:void()" class="dropdown-item">Dropdown link</a>
									<a href="javascript:void()" class="dropdown-item">Dropdown link</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection