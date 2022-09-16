@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<!-- Account Area Start -->
<section class="account-section ptb-100 mt-4 mb-2">
            <div class="container">
                <div class="pagetitle">
                    <h4>{{ $dataUrl[str_replace('_',' ',Request::segment(1))] }}</h4>
                      <x-breadcrumb :currentPath="$currentPath" :dataUrl="$dataUrl" />
                 </div>
                <div class="row g-1">
                    <div class="col-md-3 ">
                        <div class="account-information card">



                            <ul  class="nav nav-pills  " id="nav-tab" role="tablist">

                                <li class="w-100">
                                    <button class="nav-link w-100 text-start p-2 fs-5 active" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="true">
                                    <i class='bx bx-user  px-2'></i>
                                          تعديل  ملفي الشخصي
                                    </button>
                                </li>

                                <li class="w-100">
                                    <button class="nav-link w-100 text-start p-2 fs-5" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="true">
                                    <i class='bx bx-lock-alt px-2'  ></i>
                                       تغير كلمة السر
                                    </button>
                                </li>



                            </ul>
                        </div>
                    </div>




                    <div class="col-md-8 tab-content" id="pills-tabContent">
                        <div class="tab-content" id="nav-tabContent">
                            {{-- 1 --}}
                            <div class="tab-pane fade  " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="account-details card ">

                                </div>
                            </div>
                            {{-- 2 --}}
                            <div class="tab-pane fade show active " id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">

                                <div class="account-details card ">

                                    @include('profile.edit')


                                </div>

                            </div>
                            {{-- 3 --}}
                            <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="account-details card ">
                                    <h3>تعديل كلمة المرور </h3>
                                    <div class="col-12   text-center    " >


                                        <div class=" text-start  ">
                                            <form action="{{ route('profile.updatepassword') }}" method="post">

                                            @csrf

                                                <div class="form-floating mb-2">
                                                    <input type="password" name="old_password" class="form-control @error('old_password') is-invalid   @enderror" id="floatingPassword" placeholder="كلمة السر">
                                                    <label for="floatingPassword">كلمة المرور القديمة</label>
                                                    @error('old_password')

                                                      <span class="text-danger">
                                                          {{ $message }}
                                                      </span>

                                                    @enderror
                                                </div>

                                                <div class="form-floating mb-2">
                                                    <input type="password" name="new_password" class="form-control  @error('new_password') is-invalid   @enderror" id="floatingPassword" placeholder="كلمة السر">
                                                    <label for="floatingPassword">كلمة المرور الجديدة</label>
                                                    @error('new_password')

                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>

                                                  @enderror
                                                </div>

                                                <div class="form-floating mb-2">
                                                    <input type="password" name="new_password_confirmation" class="form-control" id="floatingPassword" placeholder="كلمة السر">
                                                    <label for="floatingPassword"> تاكيد كلمة المرور </label>
                                                </div>

                                                <button class="btn btn-primary m-2" type="submit">حفظ</button>
                                            </form>
                                        </div>
                                     </div>

                                </div>
                            </div>
                      </div>

                    </div>
                </div>
            </div>
</section>
<!-- Account Area End -->




 @endsection
