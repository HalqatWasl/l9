@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<section class="job-details ptb-100 mt-5">
            <div class="container">

                <div class="row p-0 m-0 g-1">
                    <div class="col-lg-8 ">

                        <div class="row col-lg-12 card p-2 py-4  ">
                            <div class="col-lg-12">
                                <div class="job-details-text">
                                    <div class="job-card">
                                        <div class="row align-items-center">

                                            <div class="col-md-10">
                                                <div class="job-info text-start ">
                                                    <h3>{{ $open_work->title }}</h3>
                                                    <ul>
                                                        <li>
                                                            <i class="bx bx-location-plus"></i>
                                                             العمل في
                                                            {{ $open_work->directorate->province->name }}
                                                            - مديرية
                                                            {{ $open_work->directorate->name }}
                                                        </li>
                                                        <li>
                                                            <i class="bx  bx-briefcase"></i>
                                                            العامل المطلوب
                                                            {{ $open_work->departement->name }}
                                                        </li>
                                                        <!-- <li>
                                                            <i class="bx bx-briefcase"></i>
                                                            عامل حر
                                                        </li> -->
                                                    </ul>

                                                    <!-- <span>
                                                        <i class="bx bx-paper-plane"></i>
                                                        تم تنفيذ العمل قبل: June 01,2021
                                                    </span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="details-text">
                                        <h3>الوصف</h3>
                                        <p>   {{ $open_work->description }}</p>

                                    </div>


                                    <div class="details-text">
                                        <h3>تفاصيل العمل</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-3"><span> مطلوب   </span></td>
                                                            <td class="col-9 text-center w-100">  {{ $open_work->departement->name }} </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-3"><span>الموقع</span></td>
                                                            <td class="col-9 text-center w-100">
                                                                 :
                                                                {{ $open_work->directorate->province->name }}
                                                                - مديرية
                                                                {{ $open_work->directorate->name }}
                                                                -
                                                                {{ $open_work->address }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-3"><span> ينفذ العمل في  </span></td>
                                                            <td  class="col-9 text-center w-100" >  {{ $open_work->num_day }}  يوم</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-3" ><span>السعر : </span></td>
                                                            <td  class="col-9 text- w-100">{{ $open_work->pric }} ريال يمني</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- <div class="theme-btn">
                                        <a href="#" class="default-btn">
                                            التقديم لاخذ العمل
                                        </a>
                                    </div> -->



                                </div>
                            </div>
                        </div>

                     @guest

                      @else
                         @if($open_work->user_id != Auth::user()->id)
                            <div class="row col-lg-12 card p-2 py-4">
                                <div class="col-lg-12">
                                    <div class="job-details-text">
                                        <div class="job-card">
                                            <div class="row align-items-center">

                                                <div class="col-md-12">
                                                    <div class="job-info text-start p-2">
                                                        <h3>  تقديم عرض  </h3>
                                                    </div>

                                                        <form action=" {{ route('offer.store') }} " method="POST" class="job-post-from shadow-none w-100 m-0 p-0">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $open_work->id }}">
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group">
                                                                        <label>الايام المطلوبة انجاز العمل</label>
                                                                        <input type="number" name="num_day" class="form-control text-start" id="exampleInput2" placeholder="مثال : 5" required="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>السعر</label>
                                                                        <input type="number" name="pric" class="form-control text-start" id="exampleInput7" placeholder="مثال 5000 الف ريال يمني" required="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">وصف  </label>
                                                                        <textarea name="description" class="form-control description-area" id="exampleFormControlTextarea1" rows="6" placeholder="وصف العمل الذي تريده اكتب عن تفاصيل العمل " required=""></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12 theme-btn">
                                                                    <button type="submit" class="default-btn">
                                                                    تقديم العرض
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                         @endif
                     @endguest

                    </div>



                    <div class="col-lg-4 ">
                        <div class="job-sidebar rounded-0 top card  shadow-none">
                            <h3>تم النشر بواسطة</h3>
                            <div class="posted-by">
                                <img src="{{ '/storage/images/'.$open_work->user->image }}" class="card-img-top rounded-circle m-auto p-2" style="width: 7rem; height: 7rem;"  alt="client image">
                                <h4 class="pt-3">{{ $open_work->user->name }}</h4>
                                <span></span>
                            </div>
                        </div>





                        <div class="job-sidebar social-share rounded-0 top card  shadow-none ">
                            <h3>مشاركة على </h3>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook "></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="col-lg-8 p-0">
                        <div class="p-3 mt-2">
                            <h2>العروض</h2>
                        </div>
                        @guest
                            <div class="card">
                                <div class="card-body p-5 text-center">
                                    <a name="" id="" class="btn btn-primary m-0" href="#" role="button">تسجيل </a>
                                    <a name="" id="" class="btn btn-success m-0 ms-2" href="#" role="button">انشاء حساب  </a>
                                </div>
                            </div>
                        @endguest
                        <livewire:offer :open_work_id="$open_work->id" >

                    </div>

                </div>
            </div>
        </section>

@endsection
