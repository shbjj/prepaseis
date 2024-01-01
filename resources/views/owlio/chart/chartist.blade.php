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
			<div class="col-sm-6">
				<div class="welcome-text">
					<h4>Hi, welcome back!</h4>
					<p class="mb-0">Your business dashboard template</p>
				</div>
			</div>
			<div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Chartist</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->




		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Advanced Smil Animation</h4>
							</div>
							<div class="card-body">
								<div id="smil-animations" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Simple line chart</h4>
							</div>
							<div class="card-body">
								<div id="simple-line-chart" class="ct-chart ct-golden-section chartlist-chart" ></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Line Scatter Diagram</h4>
							</div>
							<div class="card-body">
								<div id="scatter-diagram" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Line chart with tooltips</h4>
							</div>
							<div class="card-body">
								<div id="line-chart-tooltips" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Line chart with area</h4>
							</div>
							<div class="card-body">
								<div id="chart-with-area" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Bi-polar Line chart with area only</h4>
							</div>
							<div class="card-body">
								<div id="bi-polar-line" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">SVG Path animation</h4>
							</div>
							<div class="card-body">
								<div id="svg-animation" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Line Interpolation / Smoothing</h4>
							</div>
							<div class="card-body">
								<div id="line-smoothing" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Different configuration for different series</h4>
							</div>
							<div class="card-body">
								<div id="different-series" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">SVG Animations chart</h4>
							</div>
							<div class="card-body">
								<div id="svg-dot-animation" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Bi-polar bar chart</h4>
							</div>
							<div class="card-body">
								<div id="bi-polar-bar" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Overlapping bars on mobile</h4>
							</div>
							<div class="card-body">
								<div id="overlapping-bars" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Multi-line labels</h4>
							</div>
							<div class="card-body">
								<div id="multi-line-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Stacked bar chart</h4>
							</div>
							<div class="card-body">
								<div id="stacked-bar-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Horizontal bar chart</h4>
							</div>
							<div class="card-body">
								<div id="horizontal-bar-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Extreme responsive configuration</h4>
							</div>
							<div class="card-body">
								<div id="extreme-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Label placement</h4>
							</div>
							<div class="card-body">
								<div id="label-placement-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Animating a Donut with Svg.animate</h4>
							</div>
							<div class="card-body">
								<div id="animating-donut" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Simple pie chart</h4>
							</div>
							<div class="card-body">
								<div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Pie chart with custom labels</h4>
							</div>
							<div class="card-body">
								<div id="pie-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Gauge chart</h4>
							</div>
							<div class="card-body">
								<div id="gauge-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection