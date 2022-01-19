<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('dz.name') }} | @yield('title')</title>

	<meta name="description" content="@yield('page_description')"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('') }}" rel="stylesheet" type="text/css"/>


    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{!! url('/index'); !!}" class="brand-logo">
{{--			@if(!empty($logo))--}}
{{--				<img class="logo-abbr" src="{{ asset($logo) }}" alt="">--}}
{{--			@else--}}
                <img class="logo-abbr" src="{{ asset('images/the-guardian-logo.jpeg') }}" alt="">
{{--			@endif--}}
{{--			@if(!empty($logoText))--}}
{{--                <img class="logo-compact" src="{{ asset($logoText) }}" alt="">--}}
{{--                <img class="brand-title" src="{{ asset($logoText) }}" alt="">--}}
{{--			@else--}}
                <img class="logo-compact" src="{{ asset('images/the-guardian-logo.jpeg') }}" alt="">
                <h3>The Guardian</h3>
{{--                <img class="brand-title" src="{{ asset('images/logo-text.png') }}" alt="">--}}
{{--			@endif	--}}
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

		@include('elements.header')


        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('elements.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

		@include('elements.footer')

        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	@include('elements.footer-scripts')
</body>
</html>
