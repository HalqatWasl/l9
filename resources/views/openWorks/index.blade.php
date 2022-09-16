@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<section class=" job-list-section pt-100 mt-3 pb-70">

            <div class="container">


              <div class="pagetitle">
                <h4>{{ $dataUrl[str_replace('_',' ',Request::segment(1))] }}</h4>
                  <x-breadcrumb :currentPath="$currentPath" :dataUrl="$dataUrl" />
              </div>


                <div class="section-title d-flex float-start mb-3 w-100">
                    <!-- <h2 class="text-start w-100 float-start"> الاعمال المفتوحة</h2> -->
                    {{-- <p>منصة "حلقة وصل" تربط أصحاب الخبرات الباحثين عن فرصة عمل مع الجهات
(أفراد، شركات، مؤسسات...) الذين ليس لديهم الوقت الكافي للبحث عن</p> --}}



              </div>



                  <livewire:open-work :departement_id="$departement_id" />




            </div>
        </section>

@endsection
