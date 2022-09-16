<!doctype html>
<html lang="ar" dir="rtl">

<head>
 <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'حلقة وصل | لوحة التحكم') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="../https://fonts.gstatic.com" rel="preconnect">
  <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{ asset('adminPage/assets/vendor/bootstrap/css/bootstrap.rtl.min.css') }} " rel="stylesheet">
  <link href="{{ asset('adminPage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('adminPage/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminPage/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('adminPage/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('adminPage/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('adminPage/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('adminPage/assets/css/style.css') }}" rel="stylesheet">
    <style>

        *{
            font-family: 'Cairo', sans-serif !important;
        }

        @media (max-width: 1199px) {
            .toggle-sidebar .sidebar {
              right: 0px;
            }
          }

          body{
              margin: 8px;
          }

    </style>

    @livewireStyles
</head>

<body >
   <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center m-0 w-100 ">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">حلقة وصل</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">





        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ '/storage/images/'.Auth::user()->image }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <!-- <span>My Profile</span> -->
              </a>
            </li>



            <li>
              <hr class="dropdown-divider">
            </li>



            <li>
              <a class="dropdown-item d-flex align-items-center" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
                <i class="bi bi-box-arrow-right"></i>
                <span>تسجيل خروج</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : 'collapsed' }} "   href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>الرئيسية</span>
        </a>
      </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link {{ (request()->is('dashboard/users')) ? 'active' : 'collapsed' }} " href="{{ route('dashboard.users') }}">
          <i class="bx bx-user"></i>
          <span> المستخدمين </span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link  {{ (request()->is('dashboard/openWorks')) ? 'active' : 'collapsed' }}" href="{{ route('dashboard.openWorks') }}">
          <i class="bx bxs-collection"></i>
          <span> الاعمال   </span>
        </a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard.users') }}">
          <i class="bx bx-images"></i>
          <span> معرض الاعمال   </span>
        </a>
    </li> -->

    <li class="nav-item">
        <a class="nav-link {{ (request()->is('dashboard/departement')) ? 'active' : 'collapsed' }}" href="{{ route('dashboard.departement') }}">
          <i class="bx bxs-wrench"></i>
          <span> المهن    </span>
        </a>
    </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bx-map"></i><span>المناطق</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content {{ (request()->is('dashboard/province')) ? 'active' : 'collapsed' }} " data-bs-parent="#sidebar-nav">
          <li>
            <a class="{{ (request()->is('dashboard/province')) ? 'active' : 'collapsed' }}" href="{{ route('dashboard.province') }}">
              <i class="bi bi-circle"></i><span>المحافظات </span>
            </a>
          </li>
          <li>
            <a class="{{ (request()->is('dashboard/directorate')) ? 'active' : 'collapsed' }}" href="{{ route('dashboard.directorates') }}">
              <i class="bi bi-circle"></i><span>المديريات</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->



    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

 @yield('content')



</main>
<div  wire:model='msg'>

    @if (session()->has('success'))

    <div wire:poll class="position-fixed bottom-0 row  start-0 end-0 px-4  " >
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


    </div>
<livewire:dashboard.msg />
<script>
    window.addEventListener('msg1',event => {
        alert( event.detail.msg );
    })
</script>


         <!-- Vendor JS Files -->
  <script src="{{ asset('adminPage/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('adminPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" ></script>
  <script src="{{ asset('adminPage/assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('adminPage/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('adminPage/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('adminPage/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('adminPage/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('adminPage/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('adminPage/assets/js/main.js') }}"></script>
  @livewireScripts
</body>
</html>
