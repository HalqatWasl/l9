@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<div class="container pt-5 my-5 tab-pane fade bg-light active show ">


        <div class="row px-lg-3 pt-3 "> 



                <div class="row g-2 ">


                    @foreach($works as $work)

                    <div class="  col-lg-4 col-12">

                    <div   class="card  m-0.5">
                      <div class="card-body m-auto w-100 d-flex shadow-sm  ">
                        <img src="{{ '/storage/images/'.$work->user->image }}" alt="" class="card-img-top rounded-circle m-auto " style="width: 3rem; height:3rem ; " srcset="">
                        <div class="mx-2 w-100">
                          <h6 class="m-auto "><a class="nav-link p-1 m-0 h5" href="{{ url('user', [$work->user->username]) }}"> {{ $work->user->name }} </a></h6>
                          <livewire:dt-carbon :dt="$work->created_at" >

                        </div>

                      </div>

                    <div class="card-body">

                      <h5>{{ $work->titel }}</h5>
                      <p class="card-text ">{{ $work->description }}</p>
                    </div>

                    <div id="carouselExampleCaptions{{ $work->id }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          @php
                           $i2=0
                          @endphp

                          @foreach(json_decode($work->images,true) as $image)

                          @if($i2==0)

                          <button type="button" data-bs-target="#carouselExampleCaptions{{ $work->id }}" data-bs-slide-to="0" aria-label="الشريحة الثانية" class="active" aria-current="true"></button>


                           @else

                           <button type="button" data-bs-target="#carouselExampleCaptions{{ $work->id }}" data-bs-slide-to="{{ $i2 }}" class="" aria-label="الشريحة الأولى"></button>
                          @endif
                          @php
                          $i2+=1
                         @endphp

                          @endforeach
                             </div>
                        <div class="carousel-inner">

                            {{ $i=0 }}
                          @foreach(json_decode($work->images,true) as $image)

                          @if($i==0)

                          <div class="carousel-item active">
                            <div style="height:350px ;
                            overflow: hidden; ">
                              <img src="{{ '/storage/imagesWorks/'.$image }}"  style="display:block;
                              width: 100%;
                              height: 100%;
                              "class="card-img-top "  alt="...">
                            </div>
                          </div>
                          {{ $i=1 }}
                           @else

                           <div class="carousel-item ">
                            <div style="height:350px ;
                            overflow: hidden; ">
                              <img src="{{ '/storage/imagesWorks/'.$image }}"  style="display:block;
                              width: 100%;
                              height: 100%;
                              "class="card-img-top "  alt="...">
                            </div>
                          </div>
                          @endif

                          @endforeach




                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">السابق</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">التالي</span>
                        </button>
                      </div>
                       <livewire:likes :work_id="$work->id" />
                    </div>

                    </div>

                    @endforeach
                   @livewireScripts

                    </div>

               
             </div>




           </div>
          


<div class=" col-md-8 offset-md-2">
<div class=" w-50 mx-auto ">{{ $works->links("pagination::bootstrap-4") }}</div>
</div>

@endsection
