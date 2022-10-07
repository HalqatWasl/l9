<!doctype html>
<html lang="ar" dir="rtl">
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" type="text/css" >
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="dj6GPS93qZHqQg14Hwzh3cJKBErSgJp9GS4xLIyBfOo" />

    <meta name="description" content="">
    <meta name="key" content="Halqat Wasl1, منصة حلقة وصل, مهني">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>منصة حلقة وصل | Halqat Wasl1</title>

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
     <!-- Bootstrap CSS -->

 <link rel="stylesheet"  href="{{ asset('dist/1/css/chosen.css') }}">
 <link rel="stylesheet"  href="{{ asset('dist/star-rating/dist/star-rating.css') }}">
 <link rel="stylesheet" href="{{asset('dist/css/bootstrap.rtl.min.css') }}" >
 <link rel="stylesheet" href="{{ asset('dist/1/css/style.css') }}">


   <!-- <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}"> -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


   <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="{{ asset('assets/css/boxicon.min.css') }}">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css') }}">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
		<!-- RTL CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
        <link rel="stylesheet"  href="{{ asset('dist/1/css/chosen.css') }}">

        <!-- Title CSS -->
        	<title>منصة حلقة وصل</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
        @livewireStyles
   <style>


      .b-example-divider {
        flex-shrink: 0;

        height: 100vh;
        background-color: rgba(60, 66, 119, 0.486);
        border: solid rgba(68, 67, 124, 0.541);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .bi {
        vertical-align: -.125em;
        pointer-events: none;
        fill: currentColor;
      }

      .dropdown-toggle { outline: 0; }

      .nav-flush .nav-link {
        border-radius: 0;
      }

      .btn-toggle {
        display: inline-flex;
        align-items: center;
        padding: .25rem .5rem;
        font-weight: 600;
        color: rgba(60, 55, 128, 0.65);
        background-color: transparent;
        border: 0;
      }
      .btn-toggle:hover,
      .btn-toggle:focus {
        color: rgba(78, 114, 143, 0.85);
        background-color: #d2f4ea;
      }

      .btn-toggle::before {
        width: 1.25em;
        line-height: 0;
        float: left;
        content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
        transition: transform .35s ease;
        transform-origin: .5em 50%;
      }

      .btn-toggle[aria-expanded="true"] {
        color: rgba(0, 0, 0, .85);
      }
      .btn-toggle[aria-expanded="true"]::before {
        transform: rotate(90deg);
      }

      .btn-toggle-nav a {
        display: inline-flex;
        padding: .1875rem .5rem;
        margin-top: .125rem;
        margin-left: 1.25rem;
        text-decoration: none;
      }
      .btn-toggle-nav a:hover,
      .btn-toggle-nav a:focus {
        background-color: #d2f4ea;
      }

      .scrollarea {
        overflow-y: auto;
      }

      .fw-semibold { font-weight: 600; }
      .lh-tight { line-height: 1.25; }





      :root{
        --t:#6f42c1;

        /* 625ea2 */
      }

      .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: var(--t);
      }
      .dropdown-item {
       color: var(--t);
      }
      .link-dark {
        color: var(--t);
    }
    /* .btn ,.c{
      color: var(--t);
    } */

  .bg-c{
    background-color: var(--t);
  }
  .btn-primary ,.btn-ligh:hover{
    color: #fff;
    background-color: var(--t);
    border-color: var(--t);
}
.btn-primary:hover{
  color: #fff;
  background-color: var(--t);
  border-color: var(--t);
}
.btn-light {
  color: var(--t);
  background-color: #f8f9fa;
  border-color: #625ea2;
}
.nav-link{
    color: var(--t);
}
.text-primary{
    color: var(--t) !important;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #625ea2;
    background-color: #fff;
    border-color: #fff;
    border-bottom-color: var(--t);
    border-bottom: 3px solid var(--t);
}
@media (max-width:700px){
    ul.pagination li:not(.show-mobile){
        display: flex;
    }
}
.page-item.active .page-link ,.page-item .active{
    background-color: var(--t) !important;
    color: #fff !important;
    border-color: var(--t) !important;
}
.navbar-primary{
    background-color: var(--t);
}
.dropdown-item.active, .dropdown-item:active{
    background:none;
}
.read_at{
    color: #1e2125;
    background-color: #e9ecef;
}
.job-sidebar.social-share ul li a i{
  color: var(--t);
}
.job-sidebar.social-share ul li a i:hover{
  color: #fff;
  background-color: var(--t);
}
.theme-btn .default-btn ,.find-form .find-btn{
    background-color: var(--t);
    color:#fff;
}
@media (min-width: 992px){
    .navbar-expand-lg .navbar-collapse-md {
    display: none!important;
}
}
.dropdown-menu{
    max-height:440px;
    overflow-y: auto;
    scrollbar-width: thin;
  scrollbar-color: #aab7cf transparent;
}
.dropdown-menu::-webkit-scrollbar {
  width: 5px;
  height: 8px;
  background-color: #fff;
}
.dropdown-menu::-webkit-scrollbar-thumb {
  background-color: #aab7cf;
}
.condidate-slider .owl-dots .owl-dot span{
  background: #869791!important;
}
.bg-primary {
    background-color:#6f42c1!important;
}
    </style>
    <link rel="stylesheet" href="dist/css/mian.css">

</head>
<body >





	<!-- Pre-loader Start -->

    <!-- Pre-loader End -->

    <main style="min-height: 800px;">
        @yield('content')
    </main>



  @guest

  @else
  @if(!Auth::user()->citys_id or !Auth::user()->phone or !Auth::user()->user_type or !Auth::user()->description and !Auth::user()->departement_id)
  <div class="position-fixed bottom-0 row  start-0 end-0 px-4  " >
   <div class="col-12 col-md-5  alert alert-warning alert-dismissible fade show " role="alert">
       تنبية ! اكمل تسجيل بياناتك <a href="{{ route('profile.settings') }}" class="alert-link">من هنا</a>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
   </div>
</div>
  @endif
  @endguest


        @extends('layouts.footer')

         @if (session()->has('success'))

             <div class="position-fixed bottom-0 row  start-0 end-0 px-4  " >
                <div class="col-11 col-md-5  alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
                </div>
            </div>
         @endif


          @if (session()->has('error'))

             <div class="position-fixed bottom-0 row  start-0 end-0 px-4  " >
                <div class="col-11 col-md-5  alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session()->get('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
                </div>
            </div>
         @endif

         @guest
             @else
               @if(Auth::user()->is_active == 0)
                    <div class="bg-white vw-100 vh-100 position-fixed top-0 start-0 end-0 d-flex justify-content-center align-items-center" style="z-index:99999999999999999;">

                            <div class="text-center">
                                <img src="{{ asset('img/٢٠٢١١٢١٤_٢٣٠٤٥٢.png') }}" srcset=""   alt="..." style="width: 7rem; height: 7rem;">
                                <h3>منصة حلقة وصل  </h3>
                                <hr>
                                <h6>ملاحظة : لقد تم تقييد حسابك من قبل مسؤول المنصة .</h6>
                            </div>

                    </div>
               @endif
         @endguest



        <script src="{{ asset('dist/1/js/jquery-3.3.1.min.js') }}"></script>
    <!-- <script src="{{ asset('dist/1/js/popper.min.js') }}"></script> -->
    {{-- <script src="{{ asset('dist/1/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('dist/1/js/chosen.jquery.min.js')}}"></script>
      {{-- <script src="{{ asset('dist/1/js/main.js')}}"></script> --}}
      <script src="{{ asset('dist/star-rating/dist/star-rating.js') }}" ></script>
        {{-- <script src="{{ asset('dist/js/min.js')}}"></script> --}}
        {{-- <!-- <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}" ></script> --> --}}

        <script>
               var stars = new StarRating('.star-rating');
        </script>
    </div>

    <!-- Back To Top End -->

		<!-- jQuery first, then Bootstrap JS -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	  {{-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
		<!-- Owl Carousel JS -->

		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<!-- Nice Select JS -->
		<!-- <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script> -->
		<!-- Magnific Popup JS -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- Subscriber Form JS -->
		<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
		<!-- Form Velidation JS -->
		<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
		<!-- Contact Form -->
		 <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
		<!-- Meanmenu JS -->
		 <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
		<!-- Custom JS -->

        <script src="assets/js/custom.js"></script>
         <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}" ></script>

        @livewireScripts
</body>
</html>
