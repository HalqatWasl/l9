@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<!-- Banner Section Start -->
<div class="container py-5 my-5">

    <div class="pagetitle mt-3">
       <h4>{{ $dataUrl[str_replace('_',' ',Request::segment(1))] }}</h4>
        <x-breadcrumb :currentPath="$currentPath" :dataUrl="$dataUrl" />
     </div>



        <!-- Banner Section End -->






    <div class="">

        <livewire:worker :departement_id="$departement_id" :directorate_id="$directorate_id">
    </div>









<!-- Button trigger modal -->










        <!-- <script src="assets/js/jquery.min.js"></script> -->
		<!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->
		<!-- Owl Carousel JS -->

		<!-- Nice Select JS -->
		<!-- <script src="assets/js/jquery.nice-select.min.js"></script> -->
		<!-- Magnific Popup JS -->
		<!-- <script src="assets/js/jquery.magnific-popup.min.js"></script> -->
		<!-- Subscriber Form JS -->
		<!-- <script src="assets/js/jquery.ajaxchimp.min.js"></script> -->
		<!-- Form Velidation JS -->
		<!-- <script src="assets/js/form-validator.min.js"></script> -->
		<!-- Contact Form -->
		<!-- <script src="assets/js/contact-form-script.js"></script> -->
		<!-- Meanmenu JS -->
		<!-- <script src="assets/js/meanmenu.js"></script> -->
		<!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
@endsection
