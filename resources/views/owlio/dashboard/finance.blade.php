@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
			<div class="me-auto  d-lg-block mb-3">
				<h2 class="text-black mb-0 font-w700">Finance</h2>
				<p class="mb-0 fs-18">Lorem ipsum  dolor sit amet </p>
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
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card card-bx">
					<div class="card-body">
						<div class="media align-items-center">
							<div class="media-body me-3">	
								<h2 class="text-black font-w700">9,825</h2>
								<p class="mb-0 text-black font-w600">total Students</p>
								<span ><b class="text-success me-1">+0,5%</b>than last month</span>
							</div>
							<div class="d-inline-block">
								<svg class="primary-icon" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M57.4998 47.5001C57.4998 48.1631 57.2364 48.799 56.7676 49.2678C56.2987 49.7367 55.6629 50.0001 54.9998 50.0001H24.9998C24.3368 50.0001 23.7009 49.7367 23.2321 49.2678C22.7632 48.799 22.4998 48.1631 22.4998 47.5001C22.4998 43.5218 24.0802 39.7065 26.8932 36.8935C29.7063 34.0804 33.5216 32.5001 37.4998 32.5001H42.4998C46.4781 32.5001 50.2934 34.0804 53.1064 36.8935C55.9195 39.7065 57.4998 43.5218 57.4998 47.5001ZM39.9998 10.0001C38.022 10.0001 36.0886 10.5866 34.4441 11.6854C32.7996 12.7842 31.5179 14.346 30.761 16.1732C30.0041 18.0005 29.8061 20.0112 30.192 21.951C30.5778 23.8908 31.5302 25.6726 32.9288 27.0711C34.3273 28.4697 36.1091 29.4221 38.0489 29.8079C39.9887 30.1938 41.9994 29.9957 43.8267 29.2389C45.6539 28.482 47.2157 27.2003 48.3145 25.5558C49.4133 23.9113 49.9998 21.9779 49.9998 20.0001C49.9998 17.3479 48.9463 14.8044 47.0709 12.929C45.1955 11.0536 42.652 10.0001 39.9998 10.0001ZM17.4998 10.0001C15.522 10.0001 13.5886 10.5866 11.9441 11.6854C10.2996 12.7842 9.0179 14.346 8.26102 16.1732C7.50415 18.0005 7.30611 20.0112 7.69197 21.951C8.07782 23.8908 9.03022 25.6726 10.4287 27.0711C11.8273 28.4697 13.6091 29.4221 15.5489 29.8079C17.4887 30.1938 19.4994 29.9957 21.3267 29.2389C23.1539 28.482 24.7157 27.2003 25.8145 25.5558C26.9133 23.9113 27.4998 21.9779 27.4998 20.0001C27.4998 17.3479 26.4463 14.8044 24.5709 12.929C22.6955 11.0536 20.152 10.0001 17.4998 10.0001ZM17.4998 47.5001C17.4961 44.8741 18.0135 42.2735 19.0219 39.8489C20.0304 37.4242 21.5099 35.2238 23.3748 33.3751C21.8487 32.7989 20.2311 32.5025 18.5998 32.5001H16.3998C12.7153 32.5067 9.18366 33.9733 6.57833 36.5786C3.97301 39.1839 2.50643 42.7156 2.49982 46.4001V47.5001C2.49982 48.1631 2.76321 48.799 3.23205 49.2678C3.70089 49.7367 4.33678 50.0001 4.99982 50.0001H17.9498C17.6588 49.1984 17.5066 48.3529 17.4998 47.5001Z" fill="#1E33F2"/>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-6 col-sm-6">
				<div class="card card-bx">
					<div class="card-body">
						<div class="media align-items-center">
							<div class="media-body me-3">	
								<h2 class="text-black font-w700">653</h2>
								<p class="mb-0 text-black font-w600">total Teachers</p>
								<span ><b class="text-danger me-1">-2%</b>than last month</span>
							</div>
							<div class="d-inline-block">
								<svg class="primary-icon" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M59.0284 17.8807L30.7862 3.81817C30.2918 3.57103 29.7082 3.57103 29.2138 3.81817L0.971602 17.8807C0.375938 18.1794 0 18.787 0 19.4531C0 20.1192 0.375938 20.7268 0.971602 21.0255L29.2138 35.088C29.4609 35.2116 29.7305 35.2734 30 35.2734C30.2695 35.2734 30.5391 35.2116 30.7862 35.088L59.0284 21.0255C59.6241 20.7268 60 20.1192 60 19.4531C60 18.787 59.6241 18.1794 59.0284 17.8807Z" fill="#1E33F2"/>
									<path d="M56.4844 46.1441V26.2285L52.9688 27.9863V46.1441C50.9271 46.8722 49.4531 48.805 49.4531 51.0937V54.6093C49.4531 55.5809 50.2393 56.3671 51.2109 56.3671H58.2422C59.2138 56.3671 60 55.5809 60 54.6093V51.0937C60 48.805 58.526 46.8722 56.4844 46.1441Z" fill="#1E33F2"/>
									<path d="M32.3586 38.2329C31.6308 38.5967 30.8154 38.789 30 38.789C29.1846 38.789 28.3692 38.5967 27.6414 38.2329L10.5469 29.7441V33.5156C10.5469 40.4147 19.1578 45.8203 30 45.8203C40.8422 45.8203 49.4531 40.4147 49.4531 33.5156V29.7441L32.3586 38.2329Z" fill="#1E33F2"/>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-xxl-12 col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="media align-items-center">
							<div class="d-inline-block position-relative donut-chart-sale me-3">
								<span class="donut2" data-peity='{ "fill": ["rgb(30, 51, 242, 1)", "rgba(241, 241, 241,1)"],   "innerRadius": 35, "radius": 10}'>7/8</span>
								<small class="text-black">
									<svg width="38" height="41" viewBox="0 0 38 41" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_d)">
										<path d="M14.0413 32.5832C15.7416 32.5934 17.4269 32.2659 18.9997 31.6199C20.5708 32.2714 22.2572 32.5991 23.958 32.5832C29.1218 32.5832 33.1663 29.8278 33.1663 26.3088V20.441C33.1663 16.922 29.1218 14.1666 23.958 14.1666C23.7186 14.1666 23.4834 14.1779 23.2497 14.1906V7.55498C23.2497 4.10823 19.2051 1.41656 14.0413 1.41656C8.87759 1.41656 4.83301 4.10823 4.83301 7.55498V26.4448C4.83301 29.8916 8.87759 32.5832 14.0413 32.5832ZM30.333 26.3088C30.333 27.9366 27.715 29.7499 23.958 29.7499C20.201 29.7499 17.583 27.9366 17.583 26.3088V24.9984C19.5015 26.1652 21.7131 26.7604 23.958 26.714C26.203 26.7604 28.4145 26.1652 30.333 24.9984V26.3088ZM23.958 16.9999C27.715 16.9999 30.333 18.8132 30.333 20.441C30.333 22.0687 27.715 23.8807 23.958 23.8807C20.201 23.8807 17.583 22.0673 17.583 20.441C17.583 18.8147 20.201 16.9999 23.958 16.9999ZM14.0413 4.2499C17.7983 4.2499 20.4163 5.9924 20.4163 7.55498C20.4163 9.11757 17.7983 10.8615 14.0413 10.8615C10.2843 10.8615 7.66634 9.11898 7.66634 7.55498C7.66634 5.99098 10.2843 4.2499 14.0413 4.2499ZM7.66634 12.0161C9.59282 13.1601 11.8012 13.7417 14.0413 13.6948C16.2814 13.7417 18.4899 13.1601 20.4163 12.0161V14.6341C18.8724 15.0232 17.4565 15.8078 16.308 16.9107C15.5631 17.0718 14.8034 17.1545 14.0413 17.1572C10.2843 17.1572 7.66634 15.4146 7.66634 13.8521V12.0161ZM7.66634 18.3132C9.59323 19.4561 11.8015 20.0371 14.0413 19.9905C14.2935 19.9905 14.5372 19.9593 14.7851 19.9466C14.764 20.1106 14.7522 20.2756 14.7497 20.441V23.3947C14.5117 23.4089 14.2822 23.4542 14.0413 23.4542C10.2843 23.4542 7.66634 21.7117 7.66634 20.1477V18.3132ZM7.66634 24.6088C9.59282 25.7529 11.8012 26.3344 14.0413 26.2876C14.2793 26.2876 14.5131 26.2692 14.7497 26.2578V26.3088C14.7699 27.5148 15.2334 28.6711 16.0516 29.5572C15.3887 29.6824 14.7159 29.7469 14.0413 29.7499C10.2843 29.7499 7.66634 28.0074 7.66634 26.4448V24.6088Z" fill="#1E33F2"/>
										</g>
										<defs>
										<filter id="filter0_d" x="-2" y="0" width="42" height="42" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
										<feOffset dy="4"/>
										<feGaussianBlur stdDeviation="2"/>
										<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
										<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
										<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
										</filter>
										</defs>
									</svg>
								</small>
							</div>
							<div class="media-body d-sm-flex  bal-info align-items-center">	
								<div class="num-info">
									<h2 class="text-black ">$982,445.67</h2>
									<p class="mb-0 text-black font-w400">Current Balance</p>
								</div>
								<div class="ms-auto num-info-2">
									<h4 class="font-w600">Average from last month</h4>	
									<span class="">	
										<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M23.2504 6.75C23.2504 6.55109 23.1714 6.36032 23.0308 6.21967C22.8901 6.07902 22.6994 6 22.5004 6H16.3129C16.114 6 15.9233 6.07902 15.7826 6.21967C15.642 6.36032 15.5629 6.55109 15.5629 6.75C15.5629 6.94891 15.642 7.13968 15.7826 7.28033C15.9233 7.42098 16.114 7.5 16.3129 7.5H20.6742L14.4529 13.65L8.7792 9.6075C8.63359 9.50375 8.45572 9.45543 8.27764 9.47125C8.09956 9.48706 7.93299 9.56597 7.80795 9.69375L0.964196 16.725C0.836339 16.8692 0.768905 17.0571 0.775883 17.2497C0.782861 17.4423 0.863715 17.6248 1.00167 17.7594C1.13963 17.894 1.3241 17.9703 1.51681 17.9725C1.70953 17.9747 1.8957 17.9026 2.0367 17.7712L8.4342 11.2012L14.0967 15.2362C14.2408 15.3389 14.4166 15.3873 14.593 15.3729C14.7693 15.3585 14.9349 15.2822 15.0604 15.1575L21.7504 8.54625V12.9375C21.7504 13.1364 21.8295 13.3272 21.9701 13.4678C22.1108 13.6085 22.3015 13.6875 22.5004 13.6875C22.6994 13.6875 22.8901 13.6085 23.0308 13.4678C23.1714 13.3272 23.2504 13.1364 23.2504 12.9375V6.75Z" fill="#38E25D"/>
										</svg>
										<b class="text-success me-1">+0,5%</b> invoices sent
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header d-sm-flex d-block pb-0 border-0">
						<div class="me-auto pe-3">
							<h4 class="text-black fs-24 font-w700">Balance Analytics</h4>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<select class="form-control style-2 default-select me-3">
								<option>This Monthly</option>
								<option>This Weekly</option>
								<option>This Day</option>
							</select>
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
					</div>
					
					<div class="card-body pb-0">	
						<div id="areaChart" class="area-theme"></div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-xxl-12  col-lg-12">
				<div class="card widget-media">
					<div class="card-header pb-2 border-0">
						<div class="me-auto pe-3">
							<h4 class="text-black font-w700 fs-24">School Expense</h4>
							<p class="fs-16 mb-0 ">You have <strong>456</strong> contacts</p>
						</div>
						<div class="dropdown ms-auto c-pointer text-end">
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
					<div class="card-body pt-0 p-3">
						<div class="table-responsive">
							<table class="table  short-one border-hover">
								<tbody>
									<tr>
										<td>
											<span class="activity-icon ">
												<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M22.0122 1.92039L22.0109 1.92035L15.0999 1.93706C14.5822 1.93832 14.1634 2.359 14.1647 2.87684C14.1659 3.3946 14.5866 3.81333 15.1044 3.81211L19.7444 3.80084L5.70527 17.8399C5.33914 18.2061 5.33914 18.7996 5.70527 19.1658C6.0714 19.5319 6.66497 19.5319 7.0311 19.1658L21.0702 5.12669L21.059 9.76662C21.0577 10.2844 21.4765 10.7051 21.9942 10.7063C22.5121 10.7076 22.9327 10.2887 22.934 9.77106L22.9507 2.86006L22.9507 2.85884C22.9512 2.34007 22.5293 1.91982 22.0122 1.92039Z" fill="white"/>
													<path d="M18.5343 4.30378L5.35172 17.4864C4.79033 18.0478 4.79033 18.9579 5.35172 19.5193C5.91311 20.0807 6.82326 20.0807 7.38465 19.5193L20.5672 6.33672L20.559 9.76541L20.559 9.76543C20.5571 10.5593 21.1991 11.2044 21.993 11.2063C22.7871 11.2083 23.4321 10.566 23.434 9.77228L22.934 9.77106L23.434 9.77227L23.4507 2.86127L23.4507 2.85393L23.4507 2.85161C23.4473 2.06195 22.8064 1.42377 22.0195 1.4204L22.0172 1.42034L22.0097 1.42035L15.0987 1.43706L15.0987 1.43706C14.3049 1.43899 13.6628 2.08403 13.6647 2.87802C13.6665 3.67193 14.3117 4.31399 15.1056 4.3121L15.1056 4.3121L18.5343 4.30378Z" stroke="white"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">#0012345678</span>
										</td>
										<td>
											<span class="text-black text-nowrap">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td>
											<a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M22.0122 1.92039L22.0109 1.92035L15.0999 1.93706C14.5822 1.93832 14.1634 2.359 14.1647 2.87684C14.1659 3.3946 14.5866 3.81333 15.1044 3.81211L19.7444 3.80084L5.70527 17.8399C5.33914 18.2061 5.33914 18.7996 5.70527 19.1658C6.0714 19.5319 6.66497 19.5319 7.0311 19.1658L21.0702 5.12669L21.059 9.76662C21.0577 10.2844 21.4765 10.7051 21.9942 10.7063C22.5121 10.7076 22.9327 10.2887 22.934 9.77106L22.9507 2.86006L22.9507 2.85884C22.9512 2.34007 22.5293 1.91982 22.0122 1.92039Z" fill="white"/>
													<path d="M18.5343 4.30378L5.35172 17.4864C4.79033 18.0478 4.79033 18.9579 5.35172 19.5193C5.91311 20.0807 6.82326 20.0807 7.38465 19.5193L20.5672 6.33672L20.559 9.76541L20.559 9.76543C20.5571 10.5593 21.1991 11.2044 21.993 11.2063C22.7871 11.2083 23.4321 10.566 23.434 9.77228L22.934 9.77106L23.434 9.77227L23.4507 2.86127L23.4507 2.85393L23.4507 2.85161C23.4473 2.06195 22.8064 1.42377 22.0195 1.4204L22.0172 1.42034L22.0097 1.42035L15.0987 1.43706L15.0987 1.43706C14.3049 1.43899 13.6628 2.08403 13.6647 2.87802C13.6665 3.67193 14.3117 4.31399 15.1056 4.3121L15.1056 4.3121L18.5343 4.30378Z" stroke="white"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">#0012345678</span>
										</td>
										<td>
											<span class="text-black text-nowrap">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td>
											<a class="btn-link text-warning float-end" href="javascript:void(0);">Pending</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M22.0122 1.92039L22.0109 1.92035L15.0999 1.93706C14.5822 1.93832 14.1634 2.359 14.1647 2.87684C14.1659 3.3946 14.5866 3.81333 15.1044 3.81211L19.7444 3.80084L5.70527 17.8399C5.33914 18.2061 5.33914 18.7996 5.70527 19.1658C6.0714 19.5319 6.66497 19.5319 7.0311 19.1658L21.0702 5.12669L21.059 9.76662C21.0577 10.2844 21.4765 10.7051 21.9942 10.7063C22.5121 10.7076 22.9327 10.2887 22.934 9.77106L22.9507 2.86006L22.9507 2.85884C22.9512 2.34007 22.5293 1.91982 22.0122 1.92039Z" fill="white"/>
													<path d="M18.5343 4.30378L5.35172 17.4864C4.79033 18.0478 4.79033 18.9579 5.35172 19.5193C5.91311 20.0807 6.82326 20.0807 7.38465 19.5193L20.5672 6.33672L20.559 9.76541L20.559 9.76543C20.5571 10.5593 21.1991 11.2044 21.993 11.2063C22.7871 11.2083 23.4321 10.566 23.434 9.77228L22.934 9.77106L23.434 9.77227L23.4507 2.86127L23.4507 2.85393L23.4507 2.85161C23.4473 2.06195 22.8064 1.42377 22.0195 1.4204L22.0172 1.42034L22.0097 1.42035L15.0987 1.43706L15.0987 1.43706C14.3049 1.43899 13.6628 2.08403 13.6647 2.87802C13.6665 3.67193 14.3117 4.31399 15.1056 4.3121L15.1056 4.3121L18.5343 4.30378Z" stroke="white"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">#0012345678</span>
										</td>
										<td>
											<span class="text-black text-nowrap">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$912</span>
										</td>
										<td>
											<a class="btn-link text-danger float-end" href="javascript:void(0);">Canceled</a>
										</td>
									</tr>
									<tr>
										<td>
										<span class="activity-icon">
											<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M22.0122 1.92039L22.0109 1.92035L15.0999 1.93706C14.5822 1.93832 14.1634 2.359 14.1647 2.87684C14.1659 3.3946 14.5866 3.81333 15.1044 3.81211L19.7444 3.80084L5.70527 17.8399C5.33914 18.2061 5.33914 18.7996 5.70527 19.1658C6.0714 19.5319 6.66497 19.5319 7.0311 19.1658L21.0702 5.12669L21.059 9.76662C21.0577 10.2844 21.4765 10.7051 21.9942 10.7063C22.5121 10.7076 22.9327 10.2887 22.934 9.77106L22.9507 2.86006L22.9507 2.85884C22.9512 2.34007 22.5293 1.91982 22.0122 1.92039Z" fill="white"/>
												<path d="M18.5343 4.30378L5.35172 17.4864C4.79033 18.0478 4.79033 18.9579 5.35172 19.5193C5.91311 20.0807 6.82326 20.0807 7.38465 19.5193L20.5672 6.33672L20.559 9.76541L20.559 9.76543C20.5571 10.5593 21.1991 11.2044 21.993 11.2063C22.7871 11.2083 23.4321 10.566 23.434 9.77228L22.934 9.77106L23.434 9.77227L23.4507 2.86127L23.4507 2.85393L23.4507 2.85161C23.4473 2.06195 22.8064 1.42377 22.0195 1.4204L22.0172 1.42034L22.0097 1.42035L15.0987 1.43706L15.0987 1.43706C14.3049 1.43899 13.6628 2.08403 13.6647 2.87802C13.6665 3.67193 14.3117 4.31399 15.1056 4.3121L15.1056 4.3121L18.5343 4.30378Z" stroke="white"/>
											</svg>
										</span>
										</td>
										<td>
											<span class="font-w600 text-black">#0012345678</span>
										</td>
										<td>
											<span class="text-black text-nowrap">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$7,762</span>
										</td>
										<td>
											<a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M22.0122 1.92039L22.0109 1.92035L15.0999 1.93706C14.5822 1.93832 14.1634 2.359 14.1647 2.87684C14.1659 3.3946 14.5866 3.81333 15.1044 3.81211L19.7444 3.80084L5.70527 17.8399C5.33914 18.2061 5.33914 18.7996 5.70527 19.1658C6.0714 19.5319 6.66497 19.5319 7.0311 19.1658L21.0702 5.12669L21.059 9.76662C21.0577 10.2844 21.4765 10.7051 21.9942 10.7063C22.5121 10.7076 22.9327 10.2887 22.934 9.77106L22.9507 2.86006L22.9507 2.85884C22.9512 2.34007 22.5293 1.91982 22.0122 1.92039Z" fill="white"/>
													<path d="M18.5343 4.30378L5.35172 17.4864C4.79033 18.0478 4.79033 18.9579 5.35172 19.5193C5.91311 20.0807 6.82326 20.0807 7.38465 19.5193L20.5672 6.33672L20.559 9.76541L20.559 9.76543C20.5571 10.5593 21.1991 11.2044 21.993 11.2063C22.7871 11.2083 23.4321 10.566 23.434 9.77228L22.934 9.77106L23.434 9.77227L23.4507 2.86127L23.4507 2.85393L23.4507 2.85161C23.4473 2.06195 22.8064 1.42377 22.0195 1.4204L22.0172 1.42034L22.0097 1.42035L15.0987 1.43706L15.0987 1.43706C14.3049 1.43899 13.6628 2.08403 13.6647 2.87802C13.6665 3.67193 14.3117 4.31399 15.1056 4.3121L15.1056 4.3121L18.5343 4.30378Z" stroke="white"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">#0012345678</span>
										</td>
										<td>
											<span class="text-black text-nowrap">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td>
											<a class="btn-link text-success float-end" href="javascript:void(0);">Completed</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M22.0122 1.92039L22.0109 1.92035L15.0999 1.93706C14.5822 1.93832 14.1634 2.359 14.1647 2.87684C14.1659 3.3946 14.5866 3.81333 15.1044 3.81211L19.7444 3.80084L5.70527 17.8399C5.33914 18.2061 5.33914 18.7996 5.70527 19.1658C6.0714 19.5319 6.66497 19.5319 7.0311 19.1658L21.0702 5.12669L21.059 9.76662C21.0577 10.2844 21.4765 10.7051 21.9942 10.7063C22.5121 10.7076 22.9327 10.2887 22.934 9.77106L22.9507 2.86006L22.9507 2.85884C22.9512 2.34007 22.5293 1.91982 22.0122 1.92039Z" fill="white"/>
													<path d="M18.5343 4.30378L5.35172 17.4864C4.79033 18.0478 4.79033 18.9579 5.35172 19.5193C5.91311 20.0807 6.82326 20.0807 7.38465 19.5193L20.5672 6.33672L20.559 9.76541L20.559 9.76543C20.5571 10.5593 21.1991 11.2044 21.993 11.2063C22.7871 11.2083 23.4321 10.566 23.434 9.77228L22.934 9.77106L23.434 9.77227L23.4507 2.86127L23.4507 2.85393L23.4507 2.85161C23.4473 2.06195 22.8064 1.42377 22.0195 1.4204L22.0172 1.42034L22.0097 1.42035L15.0987 1.43706L15.0987 1.43706C14.3049 1.43899 13.6628 2.08403 13.6647 2.87802C13.6665 3.67193 14.3117 4.31399 15.1056 4.3121L15.1056 4.3121L18.5343 4.30378Z" stroke="white"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">#0012345678</span>
										</td>
										<td>
											<span class="text-black text-nowrap">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$912</span>
										</td>
										<td>
											<a class="btn-link text-danger float-end" href="javascript:void(0);">Canceled</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>	
				</div>	
			</div>
			<div class="col-xl-6 col-xxl-12  col-lg-12">
				<div class="card widget-media">
					<div class="card-header border-0 pb-3 ">
						<div class="me-auto pe-3">
							<h4 class="text-black font-w700 fs-24">Unpaid Student Intuition</h4>
							<p class="fs-16 mb-0 ">You have <strong>456</strong> contacts</p>
						</div>
						<div class="dropdown c-pointer ms-auto text-end">
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
					<div class="card-body pt-0 p-0">
						<div class="table-responsive intuition-table">
							<table class="table card-table">
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center intuition-profile">
												<div class="me-sm-4 me-2">
													<img src="{{ asset('images/profile/small/pic1.jpg')}}" class="rounded-circle" alt="" width="64">
												</div>
												<div class="info">
													<h5 class=" mb-0"><a class="text-black" href="{{ url('events')}}">Dawud Khan</a></h5>
													<span class="">ID 12314125</span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-start">
												<svg class="me-1 me-sm-2 mt-2 primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z" fill="#1E33F2"/>
													<path d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z" fill="#1E33F2"/>
												</svg>
												<div class="info-2">
													<h4 class="mb-0 text-primary font-w700 text-nowrap">VII-A</h4>
													<span class="">Class</span>
												</div>
											</div>	
										</td>
										<td class="text-end price">
											<h4 class="font-w700">$15,21</h4>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center intuition-profile">
												<div class="me-sm-4 me-2">
													<img src="{{ asset('images/profile/small/pic2.jpg')}}" class="rounded-circle" alt="" width="64">
												</div>
												<div class="info">
													<h5 class=" mb-0"><a class="text-black" href="{{ url('events')}}">Helena Khan</a></h5>
													<span class="">ID 12314125</span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-start">
												<svg class="me-1 me-sm-2 mt-2 primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z" fill="#1E33F2"/>
													<path d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z" fill="#1E33F2"/>
												</svg>
												<div class="info-2">
													<h4 class="mb-0 text-primary font-w700 text-nowrap">VII-A</h4>
													<span class="">Class</span>
												</div>
											</div>	
										</td>
										<td class="text-end price">
											<h4 class="font-w700">$56,34</h4>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center intuition-profile">
												<div class="me-sm-4 me-2">
													<img src="{{ asset('images/profile/small/pic3.jpg')}}" class="rounded-circle" alt="" width="64">
												</div>
												<div class="info">
													<h5 class=" mb-0"><a class="text-black" href="{{ url('events')}}">Peter Jim</a></h5>
													<span class="">ID 12314125</span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-start">
												<svg class="me-1 me-sm-2 mt-2 primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z" fill="#1E33F2"/>
													<path d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z" fill="#1E33F2"/>
												</svg>
												<div class="info-2">
													<h4 class="mb-0 text-primary text-nowrap font-w700">VII-A</h4>
													<span class="">Class</span>
												</div>
											</div>	
										</td>
										<td class="text-end price">
											<h4 class="font-w700">$54</h4>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center intuition-profile">
												<div class="me-sm-4 me-2">
													<img src="{{ asset('images/profile/small/pic4.jpg')}}" class="rounded-circle" alt="" width="64">
												</div>
												<div class="info">
													<h5 class=" mb-0"><a class="text-black" href="{{ url('events')}}">Melinda Truth</a></h5>
													<span class="">ID 12314125</span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-start">
												<svg class="me-1 me-sm-2 mt-2 primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z" fill="#1E33F2"/>
													<path d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z" fill="#1E33F2"/>
												</svg>
												<div class="info-2">
													<h4 class="mb-0 text-primary text-nowrap font-w700">VII-A</h4>
													<span class="">Class</span>
												</div>
											</div>	
										</td>
										<td class="text-end price">
											<h4 class="font-w700">$24,78</h4>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center intuition-profile">
												<div class="me-sm-4 me-2">
													<img src="{{ asset('images/profile/small/pic5.jpg')}}" class="rounded-circle" alt="" width="64">
												</div>
												<div class="info">
													<h5 class=" mb-0"><a class="text-black" href="{{ url('events')}}">Hawkins Jr.</a></h5>
													<span class="">ID 12314125</span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-start">
												<svg class="me-1 me-sm-2 mt-2 primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z" fill="#1E33F2"/>
													<path d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z" fill="#1E33F2"/>
												</svg>
												<div class="info-2">
													<h4 class="mb-0 text-primary text-nowrap font-w700">VII-A</h4>
													<span class="">Class</span>
												</div>
											</div>	
										</td>
										<td class="text-end price">
											<h4 class="font-w700">$56,3</h4>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center intuition-profile">
												<div class="me-sm-4 me-2">
													<img src="{{ asset('images/profile/small/pic6.jpg')}}" class="rounded-circle" alt="" width="64">
												</div>
												<div class="info">
													<h5 class=" mb-0"><a class="text-black" href="{{ url('events')}}">Louis</a></h5>
													<span class="">ID 12314125</span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-start">
												<svg class="me-1 me-sm-2 mt-2 primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z" fill="#1E33F2"/>
													<path d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z" fill="#1E33F2"/>
												</svg>
												<div class="info-2">
													<h4 class="mb-0 text-primary text-nowrap font-w700">VII-A</h4>
													<span class="">Class</span>
												</div>
											</div>	
										</td>
										<td class="text-end price">
											<h4 class="font-w700">$56,3</h4>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>	
@endsection