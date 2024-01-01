@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Hi, welcome back!</h4>
					<p class="mb-0">Your business dashboard template</p>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
								<!-- Tab panes -->
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
										<img class="img-fluid  " src="{{ asset('images/product/1.jpg')}}" alt="">
								</div>
								<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
										<img class="img-fluid " src="{{ asset('images/product/2.jpg')}}" alt="">
								</div>
								<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
									<img class="img-fluid" src="{{ asset('images/product/3.jpg')}}" alt="">
								</div>
								<div class="tab-pane fade" id="end-tab-pane" role="tabpanel" aria-labelledby="end-tab" tabindex="0">
									<img class="img-fluid" src="{{ asset('images/product/3.jpg')}}" alt="">
								</div>
								
								</div>
							<ul class="nav nav-tabs slide-item-list mt-3" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a href="#first" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"  role="tab" aria-controls="home-tab-pane" aria-selected="true"><img class="img-fluid me-2" src="{{ asset('images/tab/1.jpg')}}" alt="" width="80"></a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="#second" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"  role="tab" aria-controls="profile-tab-pane" aria-selected="false"><img class="img-fluid me-2" src="{{ asset('images/tab/2.jpg')}}" alt="" width="80"></a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="#third" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><img class="img-fluid me-2" src="{{ asset('images/tab/3.jpg')}}" alt="" width="80"></a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="#for" class="nav-link" id="end-tab" data-bs-toggle="tab" data-bs-target="#end-tab-pane"  role="tab" aria-controls="end-tab-pane" aria-selected="false"><img class="img-fluid" src="{{ asset('images/tab/4.jpg')}}" alt="" width="80"></a>
								</li>
								
								</ul>
							</div>
							<!--Tab slider End-->
							<div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
								<div class="product-detail-content">
									<!--Product details-->
									<div class="new-arrival-content mt-md-0 mt-3 pr">
										<h4>Neapolitan Pizza</h4>
										<div class="comment-review star-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>

											</ul>
											<span class="review-text">(34 reviews) / </span><a class="product-review" href="" data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										</div>
										<div class="d-table mb-2">
											<p class="price float-start d-block">$325.00</p>
										</div>
										<p class="text-black">Availability: <span class="item"> In stock <i class="fa fa-shopping-basket"></i></span>
										</p>
										<p class="text-black">Product code: <span class="item">0405689</span> </p>
										<p class="text-black">Brand: <span class="item">Lee</span></p>
										<p class="text-black">Product tags:&nbsp;&nbsp;
											<span class="badge badge-success light">bags</span>
											<span class="badge badge-danger light">clothes</span>
											<span class="badge badge-warning light">shoes</span>
											<span class="badge badge-info light">dresses</span>
										</p>
										<p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
											If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
										<div class="d-flex align-items-end flex-wrap mt-4">
											<div class="filtaring-area me-3">
												<div class="size-filter">
													<h4 class="m-b-15">Select size</h4>
													
													
													<div class="btn-group mb-sm-0 mb-2" role="group" aria-label="Basic radio toggle button group">
													<input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
													<label class="btn btn-outline-primary mb-0" for="btnradio1">XS</label>

													<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
													<label class="btn btn-outline-primary mb-0" for="btnradio2">SM</label>

													<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
													<label class="btn btn-outline-primary mb-0" for="btnradio3">MD</label>
													
													<input type="radio" class="btn-check" name="btnradio" id="btnradio4">
													<label class="btn btn-outline-primary mb-0" for="btnradio4">LG</label>
													
													<input type="radio" class="btn-check" name="btnradio" id="btnradio5">
													<label class="btn btn-outline-primary mb-0" for="btnradio5">XL</label>
													</div>
													
												</div>
											</div>
											<!--Quantity start-->
											<div class="col-2 px-0  me-3">
												<input type="number" name="num" class="form-control input-btn input-number" value="1">
											</div>
											<!--Quanatity End-->
											<div class="shopping-cart  me-3">
												<a class="btn btn-primary" href="javascript:void();"><i class="fa fa-shopping-basket me-2"></i>Add
													to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				
				</div>
			</div>
			<!-- review -->
			<div class="modal fade" id="reviewModal">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Review</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<form>
								@csrf
								<div class="text-center mb-4">
									<img class="img-fluid rounded" width="78" src="{{ asset('images/avatar/1.jpg')}}" alt="DexignZone">
								</div>
								<div class="form-group">
									<div class="rating-widget mb-4 text-center">
										<!-- Rating Stars Box -->
										<div class="rating-stars">
											<ul id="stars">
												<li class="star" title="Poor" data-value="1">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Fair" data-value="2">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Good" data-value="3">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Excellent" data-value="4">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="WOW!!!" data-value="5">
													<i class="fa fa-star fa-fw"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
								</div>
								<button class="btn btn-success btn-block">RATE</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection