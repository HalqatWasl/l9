@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<section class=" job-list-section pt-100 mt-3 pb-70">

            <div class="container">


             


                <div class="section-title d-flex float-start mb-3 w-100">
                    <!-- <h2 class="text-start w-100 float-start"> الاعمال المفتوحة</h2> -->
                    {{-- <p>منصة "حلقة وصل" تربط أصحاب الخبرات الباحثين عن فرصة عمل مع الجهات
(أفراد، شركات، مؤسسات...) الذين ليس لديهم الوقت الكافي للبحث عن</p> --}}



              </div>



              <div class="row col-lg-12  py-2">

@if($offers)


    @foreach($offers as $offer)

    <div id="{{ $offer->id }}" class="  card  p-0 m-0 mb-1 shadow-sm">

     

        <div class="card-body">
        <p class="card-text ">{{ $offer->description }}</p>
        </div>
        @guest


        @else
           @if($offer->open_work->user_id == Auth::user()->id or $offer->user_id == Auth::user()->id )

                <div class="card-body">

                        <div class="row">
                            <div class="col-6">
                                السعر :  <span class="fw-bold "> {{ $offer->pric }} </span> ريال يمني
                            </div>
                            <div class="col-6">
                            انجاز العمل في  <span class="fw-bold ">   {{ $offer->num_day }} </span> ايام
                            </div>

                        </div>

                        
                </div>


            @endif
         
            <div class="card-footer bg-white d-flex justify-content-between">
             
                <a class="nav-link"  aria-disabled="false" href="{{ route('openwork.show', $offer->open_work->id ) }}">  الانتقال الى العمل</a>
               
                 

                @if( $offer->statu =='2')
                   <a class="nav-link"  aria-disabled="false" href="#"> <h6 class="text-success">تم الموافقة </h6></a>
                   <form action="{{ route('offer.was') }}" method="post">
                    @csrf

                    <input type="hidden" name="id" value="{{ $offer->id }}">
                    <button type="submit" class="btn btn-primary float-end"   >
                       انهاء العمل 
                    </button>
                </form>
                @endif

              
                @if( $offer->statu =='3')
                <a class="nav-link"  aria-disabled="false" href="#"> <h6 class="text-success">مكتمل </h6></a>
                
             @endif
           
          </div>
     
        @endguest
    </div>

    @endforeach


    

@endif





</div>





            </div>
        </section>

@endsection
