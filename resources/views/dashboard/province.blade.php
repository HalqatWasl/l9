@extends('dashboard.app')

@section('content')



    <div class="pagetitle mt-5 pt-4 mx-4">
      <h1>المستخدمين</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">المحافظة</a></li>
          <li class="breadcrumb-item active">المحافظة</li>
        </ol>
      </nav>
    </div>

    <section class="section    mx-2">
      <div class="row">





        <div class="col-lg-12 col-12">

          <div class="card w-100">
            <div class="card-body">

           <h5 class="card-title">المحافظات</h5>

              <livewire:dashboard.province />

          </div>

        </div>




      </div>




    </section>



@endsection
