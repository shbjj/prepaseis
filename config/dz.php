<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Application Name
	|--------------------------------------------------------------------------
	|
	| This value is the name of your application. This value is used when the
	| framework needs to place the application's name in a notification or
	| any other location as required by the application or its packages.
	|
	*/

	'name' => env('APP_NAME', 'Owlio Laravel'),


	'public' => [
		'global' => [
			'css' => [
				'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				'css/style.css',
			],
			'js' => [
				'top'=> [
					'vendor/global/global.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				],
				'bottom'=> [
					'js/custom.min.js',
					'js/deznav-init.js',
				],
			],
		],
		'pagelevel' => [
			'css' => [
				'OwlioAdminController_dashboard' => [
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
				'OwlioAdminController_dashboard_2' => [
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
				'OwlioAdminController_student' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'OwlioAdminController_teachers' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'OwlioAdminController_events' => [
					'vendor/fullcalendar/css/main.min.css',
				],
				'OwlioAdminController_finance' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'OwlioAdminController_food' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'OwlioAdminController_app_profile' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'OwlioAdminController_post_details' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'OwlioAdminController_app_calender' => [
					'vendor/fullcalendar/css/main.min.css',
				],
				'OwlioAdminController_chart_chartist' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'OwlioAdminController_chart_chartjs' => [
				],
				'OwlioAdminController_chart_flot' => [
				],
				'OwlioAdminController_chart_morris' => [
				],
				'OwlioAdminController_chart_peity' => [
				],
				'OwlioAdminController_chart_sparkline' => [
				],
				'OwlioAdminController_ecom_checkout' => [
				],
				'OwlioAdminController_ecom_customers' => [
				],
				'OwlioAdminController_ecom_invoice' => [
				],
				'OwlioAdminController_ecom_product_detail' => [
					'vendor/star-rating/star-rating-svg.css',
				],
				'OwlioAdminController_ecom_product_grid' => [
				],
				'OwlioAdminController_ecom_product_list' => [
					'vendor/star-rating/star-rating-svg.css',
				],
				'OwlioAdminController_ecom_product_order' => [
				],
				'OwlioAdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.css',
				],
				'OwlioAdminController_email_inbox' => [
				],
				'OwlioAdminController_email_read' => [
				],
				'OwlioAdminController_form_editor_summernote' => [
				],
				'OwlioAdminController_form_element' => [
				],
				'OwlioAdminController_form_pickers' => [
					'vendor/bootstrap-daterangepicker/daterangepicker.css',
					'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
					'vendor/jquery-asColorPicker/css/asColorPicker.min.css',
					'vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
					'vendor/pickadate/themes/default.css',
					'vendor/pickadate/themes/default.date.css',
					'https://fonts.googleapis.com/icon?family=Material+Icons',
				],
				'OwlioAdminController_form_validation_jquery' => [
				],
				'OwlioAdminController_form_wizard' => [
					'vendor/jquery-smartwizard/dist/css/smart_wizard.min.css',
				],
				'OwlioAdminController_map_jqvmap' => [
					'vendor/jqvmap/css/jqvmap.min.css',
				],
				'OwlioAdminController_login' => [
					'vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'OwlioAdminController_table_bootstrap_basic' => [
				],
				'OwlioAdminController_table_datatable_basic' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'OwlioAdminController_uc_lightgallery' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'OwlioAdminController_uc_nestable' => [
					'vendor/nestable2/css/jquery.nestable.min.css',
				],
				'OwlioAdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.css',
				],
				'OwlioAdminController_uc_select2' => [
					'vendor/select2/css/select2.min.css',
				],
				'OwlioAdminController_uc_sweetalert' => [
					'vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'OwlioAdminController_uc_toastr' => [
					'vendor/toastr/css/toastr.min.css',
				],
				'OwlioAdminController_ui_accordion' => [
				],
				'OwlioAdminController_ui_alert' => [
				],
				'OwlioAdminController_ui_badge' => [
				],
				'OwlioAdminController_ui_button' => [
				],
				'OwlioAdminController_ui_button_group' => [
				],
				'OwlioAdminController_ui_card' => [
				],
				'OwlioAdminController_ui_carousel' => [
				],
				'OwlioAdminController_ui_dropdown' => [
				],
				'OwlioAdminController_ui_grid' => [
				],
				'OwlioAdminController_ui_list_group' => [
				],
				'OwlioAdminController_ui_media_object' => [
				],
				'OwlioAdminController_ui_modal' => [
				],
				'OwlioAdminController_ui_pagination' => [
				],
				'OwlioAdminController_ui_popover' => [
				],
				'OwlioAdminController_ui_progressbar' => [
				],
				'OwlioAdminController_ui_tab' => [
				],
				'OwlioAdminController_ui_typography' => [
				],
				'OwlioAdminController_widget_basic' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'OwlioAdminController_demo_modules_index' => [
				],
				'OwlioAdminController_demo_modules_add' => [
				],
			],
			'js' => [
				'OwlioAdminController_dashboard' => [
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
				],
				'OwlioAdminController_dashboard_2' => [
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/peity/jquery.peity.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
				],
				'OwlioAdminController_student' => [
				],
				'OwlioAdminController_teachers' => [
				],
				'OwlioAdminController_events' => [
					'vendor/moment/moment.min.js',
					'vendor/fullcalendar/js/main.min.js',
					'js/dashboard/events.js',
				],
				'OwlioAdminController_finance' => [
					'vendor/peity/jquery.peity.min.js',
					'js/dashboard/finance.js',
					'vendor/apexchart/apexchart.js',
				],
				'OwlioAdminController_food' => [
					'vendor/peity/jquery.peity.min.js',
					'js/dashboard/food.js',
				],
				'OwlioAdminController_app_calender' => [
					'vendor/moment/moment.min.js',
					'vendor/fullcalendar/js/main.min.js',
					'js/plugins-init/fullcalendar-init.js',
				],
				'OwlioAdminController_app_profile' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'OwlioAdminController_post_details' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'OwlioAdminController_chart_chartist' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'js/plugins-init/chartist-init.js',
				],
				'OwlioAdminController_chart_chartjs' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'js/plugins-init/chartjs-init.js',
				],
				'OwlioAdminController_chart_flot' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'js/plugins-init/flot-init.js',
				],
				'OwlioAdminController_chart_morris' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/raphael/raphael.min.js',
					'vendor/morris/morris.min.js',
					'js/plugins-init/morris-init.js',
				],
				'OwlioAdminController_chart_peity' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
				],
				'OwlioAdminController_chart_sparkline' => [
					'vendor/chart-js/Chart.bundle.min.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
					'vendor/svganimation/vivus.min.js',
					'vendor/svganimation/svg.animation.js',
				],
				'OwlioAdminController_ecom_checkout' => [
				],
				'OwlioAdminController_ecom_customers' => [
					'vendor/highlightjs/highlight.pack.min.js',
				],
				'OwlioAdminController_ecom_invoice' => [
				],
				'OwlioAdminController_ecom_product_detail' => [
					'vendor/star-rating/jquery.star-rating-svg.js',
				],
				'OwlioAdminController_ecom_product_grid' => [
				],
				'OwlioAdminController_ecom_product_list' => [
					'vendor/star-rating/jquery.star-rating-svg.js',
				],
				'OwlioAdminController_ecom_product_order' => [
				],
				'OwlioAdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.js',
				],
				'OwlioAdminController_email_inbox' => [
				],
				'OwlioAdminController_email_read' => [
				],
				'OwlioAdminController_form_editor_summernote' => [
					'vendor/ckeditor/ckeditor.js',
				],
				'OwlioAdminController_form_element' => [
				],
				'OwlioAdminController_form_pickers' => [
					'vendor/moment/moment.min.js',
					'vendor/bootstrap-daterangepicker/daterangepicker.js',
					'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
					'vendor/jquery-asColor/jquery-asColor.min.js',
					'vendor/jquery-asGradient/jquery-asGradient.min.js',
					'vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
					'vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
					'vendor/pickadate/picker.js',
					'vendor/pickadate/picker.time.js',
					'vendor/pickadate/picker.date.js',
					'js/plugins-init/bs-daterange-picker-init.js',
					'js/plugins-init/clock-picker-init.js',
					'js/plugins-init/jquery-asColorPicker.init.js',
					'js/plugins-init/material-date-picker-init.js',
					'js/plugins-init/pickadate-init.js',
				],
				'OwlioAdminController_form_validation_jquery' => [
					'vendor/jquery-validation/jquery.validate.min.js',
					'js/plugins-init/jquery.validate-init.js',
				],
				'OwlioAdminController_form_wizard' => [
					'vendor/jquery-steps/build/jquery.steps.min.js',
					'vendor/jquery-validation/jquery.validate.min.js',
					'js/plugins-init/jquery.validate-init.js',
					'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
				],
				'OwlioAdminController_map_jqvmap' => [
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
					'js/plugins-init/jqvmap-init.js',
				],
				'OwlioAdminController_page_error_400' => [
				],
				'OwlioAdminController_page_error_403' => [
				],
				'OwlioAdminController_page_error_404' => [
				],
				'OwlioAdminController_page_error_500' => [
				],
				'OwlioAdminController_page_error_503' => [
				],
				'OwlioAdminController_page_forgot_password' => [
				],
				'OwlioAdminController_page_lock_screen' => [
					'vendor/deznav/deznav.min.js',
				],
				'OwlioAdminController_page_login' => [
				],
				'OwlioAdminController_page_register' => [
				],
				'OwlioAdminController_table_bootstrap_basic' => [
				],
				'OwlioAdminController_table_datatable_basic' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
				],
				'OwlioAdminController_uc_lightgallery' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'OwlioAdminController_uc_nestable' => [
					'vendor/nestable2/js/jquery.nestable.min.js',
					'js/plugins-init/nestable-init.js',
				],
				'OwlioAdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.js',
					'vendor/wnumb/wNumb.js',
					'js/plugins-init/nouislider-init.js',
				],
				'OwlioAdminController_uc_select2' => [
					'vendor/select2/js/select2.full.min.js',
					'js/plugins-init/select2-init.js',
				],
				'OwlioAdminController_uc_sweetalert' => [
					'vendor/sweetalert2/dist/sweetalert2.min.js',
					'js/plugins-init/sweetalert.init.js',
				],
				'OwlioAdminController_uc_toastr' => [
					'vendor/toastr/js/toastr.min.js',
					'js/plugins-init/toastr-init.js',
				],
				'OwlioAdminController_ui_accordion' => [
				],
				'OwlioAdminController_ui_alert' => [
				],
				'OwlioAdminController_ui_badge' => [
				],
				'OwlioAdminController_ui_button' => [
				],
				'OwlioAdminController_ui_button_group' => [
				],
				'OwlioAdminController_ui_card' => [
				],
				'OwlioAdminController_ui_carousel' => [
				],
				'OwlioAdminController_ui_dropdown' => [
				],
				'OwlioAdminController_ui_grid' => [
				],
				'OwlioAdminController_ui_list_group' => [
				],
				'OwlioAdminController_ui_media_object' => [
				],
				'OwlioAdminController_ui_modal' => [
				],
				'OwlioAdminController_ui_pagination' => [
				],
				'OwlioAdminController_ui_popover' => [
				],
				'OwlioAdminController_ui_progressbar' => [
				],
				'OwlioAdminController_ui_tab' => [
				],
				'OwlioAdminController_ui_typography' => [
				],
				'OwlioAdminController_widget_basic' => [
					'vendor/chart-js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/widgets-script-init.js',
				],
				'OwlioAdminController_demo_modules_add' => [
				],
			]
		],
	]
];