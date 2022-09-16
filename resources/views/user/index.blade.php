@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div class="container p-2 my-5 pt-md-5 ">


        <div class="row  g-2">

            <div class="card text-center  pt-5  " style="width: 100%;">


                  <img src="{{ '/storage/images/'.$user->image }}" class="card-img-top rounded-circle m-auto " alt="..." style="width: 10rem; height: 10rem;">


             <div class="card-body">
                <h5 class="card-title ">{{ $user->name }}</h5>
              <div class="d-inline-flex">

                    <p class="mx-1">
                        @if( $user->user_type ==1)

                             <span class="bi bi-person-workspace"></span>
                             <span>{{ 'عامل' }} </span>

                             @elseif($user->user_type == 2)

                             <span class="bi bi-person-workspace"></span>
                             <span>{{  'صاحب اعمال' }} </span>

                              @elseif($user->user_type == 3)

                             <span class="bx bx-briefcase"></span>
                             <span>{{  'صاحب اعمال' }} </span> {{ ',' }} <span>{{ 'عامل' }} </span>

                        @endif
                     </p>

                    <p class="mx-1">
                       @if( $user->departement)
                            <span class="bi bi-person-workspace"></span>
                            <span>{{ $user->departement->name }} </span>
                       @endif
                    </p>
                    <p class="mx-1">
                    @if($user->citys_id)
                            <span class="bi bi-geo-alt"></span>
                            <span>{{ $user->directorates->province->name }} - {{ $user->directorates->name }} </span>
                         @endif
                    </p>
                </div>
              </div>
              <div class="card-body text-end  d-flex justify-content-between align-content-stretch">

                <div>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
                        <span>تقييم</span> <i class="bi bi-star  p-0 m-0" ></i>
                    </button>
                </div>

              
              </div>
            </div>

         


         


          <div class="card  bg-light p-0" >
            <nav>
              <div class="nav nav-tabs  d-flex  bg-white " id="nav-tab" role="tablist">
                <button class="nav-link    active  " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">نبذه عني</button>
                @if( $user->user_type ==1 or $user->user_type ==3 )
                  <button class="nav-link  " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">معرض اعمالي</button>
                @endif

                @if( $user->user_type ==2 or $user->user_type ==3 )
                  <button class="nav-link  " id="nav-work-tab" data-bs-toggle="tab" data-bs-target="#nav-work" type="button" role="tab" aria-controls="nav-work" aria-selected="false">الاعمال </button>
                @endif

                <button class="nav-link " id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="true">التقييمات</button>
              </div>
            </nav>
        </div>

        <div class="tab-content  bg-light" id="nav-tabContent">

            <div class="tab-pane fade  active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="card">
                <div class="card-body">

                       <div class="col-md-12 row">
                            <div class="resume-content about-text">

                                <p> {{ $user->description }}</p>

                                <h6>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    <!-- رقم التواصل -->
                                    {{ $user->phone }}
                                </h6>
                            </div>



                        </div>
                </div>
              </div>



            </div>

              <!-- word me -->
              <div class="tab-pane fade bg-light    " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" >





                <div class=" row  g-2 ">


                @foreach($user->works as $work)

                    <div class="col-lg-4 col-12  ">

                        <div class=" card  m-0.5">
                        <div class="card-body m-auto w-100 d-flex shadow-sm  ">
                            <img src="{{ '/storage/images/'.$user->image }}" alt="" class="card-img-top rounded-circle m-auto " style="width: 3rem; height:3rem ; " srcset="">
                            <div class="mx-2 w-100">
                                <h5 class="m-auto ">{{ $user->name }} </h5>
                                   <livewire:dt-carbon :dt="$work->created_at">
                            </div>
                            <div class="float-end">
                              <button type="button" class="btn  dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="bi bi-three-dots-vertical"></span>
                              </button>

                              <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="#">اخفاء</a></li>
                                <li><a class="dropdown-item" href="#">ابلاغ</a></li>
                                <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
                              </ul>
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
                            </div> </div>
                              {{ $i=1 }}
                               @else

                               <div class="carousel-item ">
                               <div style="height:350px ;
                            overflow: hidden; ">
                              <img src="{{ '/storage/imagesWorks/'.$image }}"  style="display:block;
                              width: 100%;
                              height: 100%;
                              "class="card-img-top "  alt="...">
                            </div> </div>
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


                </div>


              

             </div>


              <div class="tab-pane fade row " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                <div class="col-12   ">
                  <div class="card  p-0 m-0 mb-2">

                    <nav>
                        <div class=" nav nav-tabs  d-flex h5 bg-white " id="nav-tab" role="tablist">
                          <button class="nav-link  py-3 mx-1 " > التقييمات</button>
                         </div>
                      </nav>
                      <div class="card-body p-3 d-flex justify-content-around align-items-center">
                        <h5 class="card-title">عدد المقيمين  ({{ $eval_count }})</h5>
                         <div>
                             @if ($eval_count)

                                @php
                                    $t=$eval_sum /$eval_count
                                @endphp
                                <span  class="bi  h3 text-warning {{ ($t >= 1  ?  'bi-star-fill': 'bi-star') }}" ></span>
                                <span  class="bi  h3 text-warning {{ ($t >= 2  ?  'bi-star-fill': 'bi-star') }}"></span>
                                <span  class="bi  h3 text-warning {{ ($t >= 3  ?  'bi-star-fill': 'bi-star') }}"></span>
                                <span  class="bi  h3 text-warning {{ ($t >= 4  ?  'bi-star-fill': 'bi-star') }}" ></span>
                                <span  class="bi  h3 text-warning {{ ($t >= 5  ?  'bi-star-fill': 'bi-star') }}" ></span>
                                <span  class="bi  h3">{{ ($eval_count  ? $eval_sum /$eval_count : '0.0') }}</span>

                                @else
                                <span  class="bi  h3 text-warning bi-star" ></span>
                                <span  class="bi  h3 text-warning bi-star" ></span>
                                <span  class="bi  h3 text-warning bi-star" ></span>
                                <span  class="bi  h3 text-warning bi-star" ></span>
                                <span  class="bi  h3 text-warning bi-star" ></span>
                             @endif

                         </div>
                         <h4>
                            <!-- <span class="badge bg-success ">جديد</span> -->
                        </h4>
                      </div>

                  </div>


                  <div class="  p-0 m-0 mb-2">

                      <nav class="card">
                        <div class=" nav nav-tabs  d-flex h5 bg-white " id="nav-tab" role="tablist">
                          <button class="nav-link    py-3 mx-1 " > الاراء</button>
                         </div>
                      </nav>

                      <div class=" p-1  pt-2">

                        @foreach($eval as $eva)

                        <div class="card  p-0 m-0 mb-2">


                            <div class="card-header bg-white m-auto w-100 d-flex   ">
                                <img src="{{ '/storage/images/'.$eva->user->image }}" alt="" class="card-img-top rounded-circle m-auto " style="width: 3rem; height:3rem ; " srcset="">
                                <div class="mx-2 w-100">
                                    <h6 class="m-auto "><a class="nav-link p-1 m-0 h5" href="{{ url('user',[$eva->username ])  }}"> {{ $eva->user_eval->name }} </a></h6>
                                    <span class="text-muted m-auto mx-1"> {{ Carbon\Carbon::parse($eva->created_at)->locale('ar_AR')->diffForHumans() }} </span>

                                </div>

                                <!-- <div class="float-end">
                                  <button type="button" class="btn  dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="bi bi-three-dots-vertical"></span>
                                  </button>

                                  <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="#">ابلاغ</a></li>
                                  </ul>
                                </div>
                                 -->
                            </div>

                            <div class="card-body">

                                <div class="d-flex">


                                    <select name="evaluation" class="star-rating " disabled>
                                        <option value="">Select a rating</option>
                                        <option value="5" {{ ($eva->evaluation == 5 ? 'selected' : '') }}>Excellent</option>
                                        <option value="4" {{ ($eva->evaluation == 4 ? 'selected' : '') }}  >Very Good</option>
                                        <option value="3" {{ ($eva->evaluation == 3 ? 'selected' : '') }} >Average</option>
                                        <option value="2" {{ ($eva->evaluation == 2 ? 'selected' : '') }}>Poor</option>
                                        <option value="1" {{ ($eva->evaluation == 1 ? 'selected' : '') }}>Terrible</option>
                                    </select>



                                 </div>
                                 <p>{{ $eva->comment }}</p>
                            </div>

                        </div>
                        @endforeach




                      </div>

                  </div>
                </div>


              </div>



                <div class="tab-pane fade  " id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">

                    <livewire:open-work :user_id="$user->id" :stage="NULL" />
                </div>
        </div>


        <div class="col-12 col-md-12 card p-3">
                <h5 class=" nav nav-tabs pb-3 "><i class="bi bi-telephone-fill me-3"></i> رقم التواصل  </h5>
                 <div class="p-3 h-6 ">
                       <i class="bi bi-telephone-fill me-3"></i>
                       <a href="tel:{{ $user->phone }}" class=" fw-bold h5">{{ $user->phone }}</a>

                 </div>
            </div>

        </div>






           </div>

           <div class="modal fade pt-5 mt-3 mx-0" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title " id="staticBackdropLiveLabel">تقييم </h5>

                  <span  class="bi bi-star-fill h5 text-warning" data-bs-dismiss="modal" aria-label="إغلاق"></span>
                </div>
                <form action="{{ route('Evaluation.create') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="modal-body text-center justify-content-center">
                        <p>ملاحظة : لايمكنك التعديل .</p>
                        <div class=" px-3 mb-3">
                            <select name="evaluation" class="star-rating ">
                                <option value="">Select a rating</option>
                                <option value="5">Excellent</option>
                                <option value="4">Very Good</option>
                                <option value="3">Average</option>
                                <option value="2">Poor</option>
                                <option value="1">Terrible</option>
                            </select>
                        </div>
                        <div class="form-floating mb-2 mx-3">
                            <textarea name="comment" class="form-control " id="floatingtextarea" placeholder="name@example.com"   ></textarea>
                            <label for="floatingtextarea">تعليق </label>
                        </div>
                    </div>
                    <div class="modal-footer text-start">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <button type="submit" class="btn btn-primary">حسنًا</button>
                       <button type="button" class="btn btn-group-vertical" data-bs-dismiss="modal">إغلاق</button>

                    </div>
                </form>
              </div>
            </div>
          </div>
</div>


@endsection
