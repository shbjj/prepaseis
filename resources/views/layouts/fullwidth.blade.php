@php
    $controller = DzHelper::controller();
    $page = $action = DzHelper::action();
    $action = $controller.'_'.$action;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>	
	<!-- Title -->
	<title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="bootstrap, courses, education admin template, educational, instructors, learning, learning admin, learning admin theme, learning application, lessons, lms admin template, lms rails, quizzes ui, school admin">
	<meta name="description" content="@yield('page_description', $page_description ?? '')"/>
	<meta property="og:title" content="Owlio - School Admission Admin Dashboard">
	<meta property="og:description" content="{{ config('dz.name') }} | @yield('title', $page_title ?? '')" />
	<meta property="og:image" content="https://owlio.dexignzone.com/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons Icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">

    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
      <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                @yield('content')
            </div>
        </div>
    </div>
<!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    @if(!empty(config('dz.public.global.js.top')))
    @foreach(config('dz.public.global.js.top') as $script)
        <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.js.'.$action)))
    @foreach(config('dz.public.pagelevel.js.'.$action) as $script)
        <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach
    @endif
    @if(!empty(config('dz.public.global.js.bottom')))
    @foreach(config('dz.public.global.js.bottom') as $script)
        <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach
    @endif

    @stack('scripts')
</body>
</html>