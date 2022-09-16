@extends('layouts.app')

@section('content')


<!-- Account Area Start -->
<section class="account-section ptb-100 mt-4 mb-2">
            <div class="container">
                <div class="row g-1">
                    <div class="col-md-4 ">
                        <div class="account-information card">



                            <ul  class="nav nav-pills " id="nav-tab" role="tablist">

                                <li class="w-100">
                                    <button class="nav-link w-100 active text-start" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                    <i class='bx bx-user px-2'></i>
                                        الملف الشخصي
                                    </button>
                                </li>


                                <li class="w-100">
                                    <button class="nav-link w-100 text-start" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="true">
                                    <i class='bx bx-user  px-2'></i>
                                          تعديل  ملفي الشخصي
                                    </button>
                                </li>


                                <li>
                                    <a href="resume.html">
                                        <i class='bx bxs-file-doc'></i>
                                        سيرتي الذاتية واعمالي
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-briefcase'></i>
                                        الاعمال التئ تم تنفيذها
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-envelope'></i>
                                        الرسائل
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                        حفظ العمل
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-lock-alt' ></i>
                                       تغير كلمة السر
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-coffee-togo'></i>
                                       حذف الحساب
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-log-out'></i>
                                        تسجيل خروج
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>




                    <div class="col-md-8 tab-content" id="pills-tabContent">
                        <div class="tab-content" id="nav-tabContent">
                            {{-- 1 --}}
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="account-details card ">
                                    {{-- <!-- @include('profile.show') --> --}}
                                </div>
                            </div>
                            {{-- 2 --}}
                            <div class="tab-pane fade show " id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">

                                <div class="account-details card ">

                                    <!-- @include('profile.edit') -->


                                </div>

                            </div>
                            {{-- 3 --}}
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...3</div>
                      </div>

                    </div>
                </div>
            </div>
</section>
<!-- Account Area End -->




 @endsection
