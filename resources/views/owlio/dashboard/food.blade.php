@extends('layouts.app')

@section('content')
	<div class="container-fluid">
	<div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
		<div class="me-auto  d-lg-block mb-3">
			<h2 class="text-black font-w700 mb-0">Food</h2>
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
						<h5 class="modal-title">Add Project</h5>
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
		<div class="col-xl-12">
			<div class="card">
				<div class="card-header border-0 pb-2 d-flex flex-wrap">
					<div class="mb-3">
						<h4 class="fs-24 font-w700 mb-2">Food Menus</h4>
						<p class="fs-14 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
					</div>
					<div class="card-action card-tabs mb-3">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#all-menus" role="tab">
									All Menus
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#breakfast" role="tab">
									For Breakfast
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#lunch" role="tab">
									For Lunch
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#snack" role="tab">
									For Evening Snack
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#dinner" role="tab">
									For Dinner
								</a>
							</li>																							
						</ul>
					</div>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="all-menus" role="tabpanel" aria-labelledby="all-menus">
						<div class="card-body p-0">
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic6.jpg')}}" alt="" >
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Creamy Parmesan Cheese with Chicken Teriyaki Egg</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3  primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">45%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">6,732</h3>
										</div>
										<span class="text-black">total Sales</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>6/8</span>
											<small class="fs-16 text-black">75%</small>
										</div>
									</div>
								</div>
							</div>
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic1.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Mini Donuts with Variant topping [Chocolate]</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">26%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">5,721</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>5/8</span>
											<small class="fs-16 text-black">62%</small>
										</div>
									</div>
								</div>
							</div>
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic2.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Cappucino Latte </a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line " data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">17%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">3,515</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>4/8</span>
											<small class="fs-16 text-black">52%</small>
										</div>
									</div>
								</div>
							</div>
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic3.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Water Melon Juice With Ice</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">45%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">6,732</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>7/8</span>
											<small class="fs-16 text-black">75%</small>
										</div>
									</div>
								</div>
							</div>
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic4.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Italiono Pizza With Chicken Steak topping</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">26%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">5,721</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>7/8</span>
											<small class="fs-16 text-black">62%</small>
										</div>
									</div>
								</div>
							</div>
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic5.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Tuna Soup with Spinach</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">14%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">3,515</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>4/8</span>
											<small class="fs-16 text-black">52%</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="breakfast" role="tabpanel" aria-labelledby="breakfast">
						<div class="card-body p-1">
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic3.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Water Melon Juice With Ice</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">45%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">6,732</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>7/8</span>
											<small class="fs-16 text-black">75%</small>
										</div>
									</div>
								</div>
							</div>
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic4.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Italiono Pizza With Chicken Steak topping</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">26%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">5,721</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>7/8</span>
											<small class="fs-16 text-black">62%</small>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch">
						<div class="card-body p-1">
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic4.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Italiono Pizza With Chicken Steak topping</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">26%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">5,721</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>7/8</span>
											<small class="fs-16 text-black">62%</small>
										</div>
									</div>
								</div>
							</div>
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic5.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Tuna Soup with Spinach</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">14%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">3,515</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>4/8</span>
											<small class="fs-16 text-black">52%</small>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="tab-pane fade" id="snack" role="tabpanel" aria-labelledby="snack">
						<div class="card-body p-1">
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic5.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Tuna Soup with Spinach</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-dark me-2 me-sm-0 ">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">14%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">3,515</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],   "innerRadius": 30, "radius": 10}'>4/8</span>
											<small class="fs-16 text-black">52%</small>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner">
						<div class="card-body p-1">
							<div class="food-list-row">
								<div class="media-bx">
									<div class="media align-items-center">
										<img class="rounded me-3" src="{{ asset('images/card/pic1.jpg')}}" alt="" width="105">
										<div class="media-body">
											<a href="javascript:void(0);" class="btn-primary btn btn-rounded align-items-center mb-2">For Breakfast</a>
											<h5 class="mb-2"><a  href="{{ url('ecom-product-detail')}}">Mini Donuts with Variant topping [Chocolate]</a></h5>
										</div>
									</div>
								</div>
								<div class="text-center food-review">
									<span class="text-black fs-18 font-w700  me-2 me-sm-0">3.6</span>
									<div class="star-review fs-14 mb-2">
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-orange"></i>
										<i class="fa fa-star text-gray"></i>
										<i class="fa fa-star text-gray"></i>
									</div>
								</div>
								<div class="food-list-footer">
									<div class="d-flex align-items-center me-3 me-sm-0">
										<div class="me-3 primary-theme">
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,4,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</div>
										<div class="media-body">
											<h3 class="text-black font-w700 mb-1">26%</h3>
											<span class="text-black">Interest</span>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-flex-end mb-1">
											<svg class="me-3 primary-icon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="3.54545" height="26" rx="1.77273" fill="#1E33F2"/>
												<rect x="7.09082" y="7.09088" width="3.54545" height="18.9091" rx="1.77273" fill="#1E33F2"/>
												<rect x="14.1816" y="17.7273" width="3.54545" height="8.27273" rx="1.77273" fill="#1E33F2"/>
												<rect x="21.2725" y="3.54547" width="3.54545" height="22.4545" rx="1.77273" fill="#1E33F2"/>
											</svg>

											<h3 class="text-black mb-0 font-w700 fs-22">5,721</h3>
										</div>
										<span class="text-black">total Order</span>
									</div>
									<div class="">
										<div class="d-sm-inline-block d-none relative donut-chart-sale">
											<span class="donut" data-peity='{ "fill": ["rgb(30, 51, 242)", "rgba(235, 235, 235, 1)"],  "innerRadius": 30, "radius": 10}'>5/8</span>
											<small class="fs-16 text-black">62%</small>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-12">
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
							<i class="la la-angle-right"></i>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	</div>	
@endsection