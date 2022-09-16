@extends('layouts.app')

@section('content')
@include('layouts.navbar')




<div  class="container py-5 mt-5 ">

       <div class="pagetitle mt-3">
                <h4>{{ $dataUrl[str_replace('_',' ',Request::segment(1))] }}</h4>
                  <x-breadcrumb :currentPath="$currentPath" :dataUrl="$dataUrl" />
              </div>
        <div class="row  g-2 mt-3">

            <div class="card text-center  pt-5  " style="width: 100%;">
                @if(Auth::user()->image)

                  <img src="{{ '/storage/images/'.Auth::user()->image }}" class="card-img-top rounded-circle m-auto " alt="..." style="width: 10rem; height: 10rem;">

                @endif
             <div class="card-body">
                <h5 class="card-title ">{{ Auth::user()->name }}</h5>
                <div class="d-md-inline-flex d-xxl-flex  text-center">
                    <p class="mx-1">
                        @if( Auth::user()->user_type ==1)

                             <span class="bi bi-person-workspace"></span>
                             <span>{{ 'عامل' }} </span>

                             @elseif(Auth::user()->user_type == 2)

                             <span class="bi bi-person-workspace"></span>
                             <span>{{  'صاحب اعمال' }} </span>

                              @elseif(Auth::user()->user_type == 3)

                             <span class="bx bx-briefcase"></span>
                             <span>{{  'صاحب اعمال' }} </span> {{ ',' }} <span>{{ 'عامل' }} </span>

                        @endif
                     </p>
                    <p class="mx-1">
                        @if( Auth::user()->departement_id)
                             <span class="bi bi-person-workspace"></span>
                             <span>{{ Auth::user()->departement->name }} </span>
                        @endif
                     </p>
                    <p class="mx-1">
                         @if(Auth::user()->citys_id)
                            <span class="bi bi-geo-alt"></span>
                            <span>{{ Auth::user()->directorates->province->name }} - {{ Auth::user()->directorates->name }} </span>
                         @endif

                    </p>


                </div>

              </div>
                 <div class="card-body  d-block d-lg-flex justify-content-lg-between align-content-lg-stretch">


                  <div>
                    @if( Auth::user()->user_type ==1 or Auth::user()->user_type ==3 )

                    <a href="{{ route('work.create') }}" class="btn btn-primary "> <span>اضافة  عمل سابق </span>  </a>
                  @endif

                  @if( Auth::user()->user_type ==2 or Auth::user()->user_type ==3 )
                  <a href="{{ route('openwork.create') }}" class="btn btn-primary "> <span>اضافة  عمل مفتوح </span>  </a>

                  @endif

                  <a href="{{ route('profile.settings') }}" class="btn btn-primary  d-lg-none">   <i class="bi bi-gear  ps-1 m-0" ></i></a>

                  </div>



                <a href="{{ route('profile.settings') }}" class="btn btn-primary d-none d-lg-block "> <span class="">الأعدادات</span>  <i class="bi bi-gear  ps-1 m-0" ></i></a>
              </div>
            </div>

          <!-- <div class="col-12 col-md-12 card p-4">
            <h5 class="card-title">نبذة عني</h5>
            <p class="px-3">محتوى لتوضيح كيف يعمل التبويب. هذا المحتوى مرتبط بتبويب الصفحة الرئيسية. إذن، أمامنا بعض التحدّيات الصعبة. لكن لا يمكننا أن نعتمد على التطورات التكنولوجية وحدها في ميدان قوى السوق الحرة، لإخراجنا من هذه الورطة، لا سيّما أنها نفسها، مقرونة بالافتقار إلى البصيرة، هي التي أودت بنا إلى هذا التبدُّل المناخي في الدرجة الأولى.</p>
          </div> -->


          <!-- <div class="col-12 col-md-12 card p-4">
            <h5 class="card-header-tabs">الاعمال</h5>
            <p class="px-3">محتوى لتوضيح كيف يعمل التبويب. هذا المحتوى مرتبط بتبويب الصفحة الرئيسية. إذن، أمامنا بعض التحدّيات الصعبة. لكن لا يمكننا أن نعتمد على التطورات التكنولوجية وحدها في ميدان قوى السوق الحرة، لإخراجنا من هذه الورطة، لا سيّما أنها نفسها، مقرونة بالافتقار إلى البصيرة، هي التي أودت بنا إلى هذا التبدُّل المناخي في الدرجة الأولى.</p>
          </div>

          <div class="col-12 col-md-4 card p-4  ">
           <table class="table">

             <tbody>
               <tr>
                 <td>التقييم </td>
                 <td>0</td>
               </tr>
               <tr>
                <td>مشاريع منفذة</td>
                <td>0</td>
              </tr>
              <tr>
                <td>مشاريع لم تكتمل</td>
                <td>0</td>
              </tr>
             </tbody>
           </table>
          </div> -->


        <div class="card  bg-light p-0" >
            <nav>
              <div class="nav nav-tabs  d-flex  bg-white " id="nav-tab" role="tablist">
                <button class="nav-link    active  " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">نبذه عني</button>
                @if( Auth::user()->user_type ==1 or Auth::user()->user_type ==3 )
                  <button class="nav-link  " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">معرض اعمالي</button>
                @endif

                @if( Auth::user()->user_type ==2 or Auth::user()->user_type ==3 )
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

                       <div class="col-md-12 row ">
                            <div class="resume-content about-text">

                                <p> {{ Auth::user()->description }}</p>

                                <h6>
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    <!-- رقم التواصل -->
                                    {{ Auth::user()->phone }}
                                </h6>
                            </div>



                        </div>
                </div>
              </div>


            </div>

              <!-- word me -->
             <div class="tab-pane fade bg-light    " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" >





                <div class=" row  g-2 p-0  m-0">


                    @foreach(Auth::user()->works as $work)

                    <div class="col-lg-4 col-12     ">
                      <div  class="card  m-0.5  ">
                        <div>
                          <div class="card-body m-auto w-100 d-flex shadow-sm  ">
                               <img src="{{ '/storage/images/'.Auth::user()->image }}" alt="" class="card-img-top rounded-circle m-auto " style="width: 3rem; height:3rem ; " srcset="">
                               <div class="mx-2 w-100">
                                   <h5 class="m-auto ">{{ Auth::user()->name }} </h5>
                                      <livewire:dt-carbon :dt="$work->created_at">
                               </div>
                               <div class="float-end">
                                 <button type="button" class="btn  dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                   <span class="bi bi-three-dots-vertical"></span>
                                 </button>

                                 <ul class="dropdown-menu ">
                                   <li><a class="dropdown-item" href="/work/delete/{{$work->id}}">حذف</a></li>

                                 </ul>
                               </div>
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
                                  </div>  </div>
                                 {{ $i=1 }}
                                  @else

                                  <div class="carousel-item ">
                                    <div style="height:350px ;
                                    overflow: hidden; ">
                                      <img src="{{ '/storage/imagesWorks/'.$image }}"  style="display:block;
                                      width: 100%;
                                      height: 100%;
                                      "class="card-img-top "  alt="...">
                                    </div>  </div>
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

       <!-- التقييمات -->
            <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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
                                <img src="{{ '/storage/images/'.$eva->image }}" alt="" class="card-img-top rounded-circle m-auto " style="width: 3rem; height:3rem ; " srcset="">
                                <div class="mx-2 w-100">
                                    <h6 class="m-auto "><a class="nav-link p-1 m-0 h5" href="{{ url('user',[$eva->username ])  }}"> {{ $eva->name }} </a></h6>
                                    <span class="text-muted m-auto mx-1"> {{ Carbon\Carbon::parse($eva->created_at)->locale('ar_AR')->diffForHumans() }}</span>

                                </div>
                                <div class="float-end">
                                  <button type="button" class="btn  dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="bi bi-three-dots-vertical"></span>
                                  </button>

                                  <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="#">ابلاغ</a></li>
                                  </ul>
                                </div>
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
             <!-- الاعمال المفتوحة -->
            <div class="tab-pane fade  " id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">

                <livewire:open-work :user_id="Auth::user()->id" :stage="NULL" />
            </div>
        </div>



     </div>






 </div>

</div>


@endsection
