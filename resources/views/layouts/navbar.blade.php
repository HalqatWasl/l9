{{--

		Navbar Area Start
		<div class="navbar-area is-sticky">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav align-content-center">
				<a href="index.html" class="logo">
					<img src="assets/img/logo.png" alt="logo">
				</a>

			</div>

			<!-- Menu For Desktop Device -->
			<div class="main-nav">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="index.html">
							<img src="{{ asset('assets/img/logo.png')}}" alt="logo">
						</a>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto h-auto ">
								<li class="nav-item">
									<a href="/" class="nav-link ">الصفحة الرئسية </a>
								</li>
								<li class="nav-item">
									<a href="about.html" class="nav-link">من نحن </a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle">الأعمال</a>

									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="find-job.html" class="nav-link">أيجاد عمل</a>
										</li>
										<li class="nav-item">
											<a href="post-job.html" class="nav-link">نشر عمل</a>
										</li>
										<li class="nav-item">
											<a href="job-list.html" class="nav-link">قائمة الاعمال</a>
										</li>
										<li class="nav-item">
											<a href="job-grid.html" class="nav-link">شبكة الاعمال</a>
										</li>
										<li class="nav-item">
											<a href="job-details.html" class="nav-link">تفاصيل الاعمال </a>
										</li>
									</ul>
								</li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle active">افضل الاعمال</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="candidate.html" class="nav-link active"> الاعمال اكثر تقيم </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="candidate-details.html" class="nav-link">تفصيل افضل اعمل</a>
                                        </li>
                                    </ul>
                                </li>

								<li class="nav-item pe-5 w-auto">
									<a href="#" class="nav-link dropdown-toggle">الصفحات</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="company.html" class="nav-link">اصحاب الاعمال </a>
										</li>

										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">الملف الشخصي</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="account.html" class="nav-link">الحساب</a>
												</li>
												<li class="nav-item">
													<a href="#" class="nav-link dropdown-toggle">الاعضاء</a>

													<ul class="dropdown-menu">
														<li class="nav-item">
															<a href="sign-in.html" class="nav-link">تسجيل دخول </a>
														</li>
														<li class="nav-item">
															<a href="sign-up.html" class="nav-link"> انشاء حساب</a>
														</li>
														<li class="nav-item">
															<a href="reset-password.html" class="nav-link">تهيئة كلمة السر</a>
														</li>
													</ul>
												<li>
												<li class="nav-item">
													<a href="resume.html" class="nav-link">	السيرة الذاتية</a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="404.html" class="nav-link">404 Page</a>
										</li>
										<li class="nav-item">
											<a href="testimonial.html" class="nav-link"> اْراى العملاء</a>
										</li>
										<li class="nav-item">
											<a href="faq.html" class="nav-link">الاسئلة الشائعة</a>
										</li>
										<li class="nav-item">
											<a href="catagories.html" class="nav-link">التصنيفات </a>
										</li>
										<li class="nav-item">
											<a href="privacy-policy.html" class="nav-link ">سياسة الخصوصية</a>
										</li>
										<li class="nav-item">
											<a href="terms-condition.html" class="nav-link">الشروط والاحكام</a>
										</li>
									</ul>
								</li>


                                    @guest

                                         @if(Route::has('register'))
                                            <li class="nav-item ">
                                                <a href="{{ route('register') }}" class="nav-link   ">انشاء حساب </a>
                                            </li>
                                         @endif

                                         @if(Route::has('login'))
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}" class="signin-btn">تسجيل الدخول </a>
                                           </li>
                                         @endif


                                     @else

                                        <li class="ps-5 w-auto a">
                                            <div class="dropdown ms-3 w-auto  ">

                                                <button class="btn w-3 rounded-circle p-0  postion-relative " type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="true">
                                                    @if(Auth::user()->image)

                                                    <span class="position-absolute   translate-middle p-1 bg-danger badge border border-white rounded-circle  " style="top:8px; right: 90%;">
                                                        <span class="visually-hidden"></span>
                                                    </span>
                                                    <img src="{{ '/storage/images/'.Auth::user()->image }}" class="rounded-circle rounded-circle p-0" style="width: 2.8rem; height: 2.8rem;" alt="" srcset="">

                                                @endif

                                                </button>

                                                <ul class="dropdown-menu m-0 start-0" aria-labelledby="dropdownMenuButtonSM" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-22px, 50px);">
                                                    <li><h6 class="dropdown-header">{{ Auth::user()->name }}</h6></li>
                                                    <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi bi-person-circle  text-start" ></i><span class="mx-2" >الملف الشخصي</span></a> </li>
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill  text-start" ></i><span class="mx-2" >الاعدادات</span></a> </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();" >
                                                        <i class="bi bi-box-arrow-left text-danger  text-start" ></i><span class="mx-2  text-danger" >تسجيل الخروج</span>
                                                        </a>
                                                    </li>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                        </form>
                                                </ul>
                                            </div>
                                        </li>
                                 @endguest

							</ul>


						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- Navbar Area End -->
--}}
 <nav class="navbar navbar-expand-lg navbar-primary text-white  position-fixed  top-0  end-0 start-0" style="z-index: 999999999;" >

    <div class="container my-2 ">
        <div class="d-flex align-items-center justify-content-between">


            <a class="  navbar-toggler text-white fs-1 m-0 p-0"   type="button" data-bs-toggle="collapse" style="font-size: 2rem;" data-bs-target="#collapsibleNavId123" aria-controls="collapsibleNavId123"
            aria-expanded="true" aria-label="Toggle navigation"><i class="bi bi-list m-0 p-0" style="font-size: 2.4rem;"></i></a>

            <a class=" text-white d-flex align-items-center p-0 m-0 ms-1" href="#">
                <img src="{{  asset('assets/img/favicon.png') }}" class="rounded-circle rounded-circle p-0 m-0 " loading="lazy" style=" height: 2.6rem;" alt="" srcset="">
                <span class="d-none d-lg-block">حلقة وصل</span>
            </a>

        </div>


        <div class="collapse navbar-collapse d-none d-lg-block" id="collapsibleNavId12" >
            <hr class="bg-white text-white">
            <ul class="navbar-nav me-auto mx-auto  ">
            <li class="nav-item active">
                    <a class="nav-link text-white" href="/">الرئسية  <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('works') }}">معرض الأعمال </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('open_works') }}">الاعمال المفتوحة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('worker') }}">العمال </a>
                </li>

            </ul>
              <div>

              </div>
            <form class="d-flex my-2 my-lg-0">

            </form>
        </div>

         <div class=" d-flex float-end align-items-center  ">
            @guest

            @if(Route::has('register'))

                <a href="{{ route('register') }}" class="btn btn-outline-light  border-0   ">حساب جديد </a>

            @endif
                         <span >|</span>
            @if(Route::has('login'))

                <a href="{{ route('login') }}" class="btn btn-outline-light  border-0"> دخول </a>

            @endif


            @else

           <div>
           <livewire:notifications />


{{-- <div class="text-end  a" style="width: fit-content;">
    <div class="dropdown ms-3  ">

        <button class="btn  rounded-circle  p-0  postion-relative  " type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="true">
            <span  wire:poll class="position-absolute   translate-middle p-1   bg-danger badge border border-primary rounded-circle   " style="top:13px; right: 80%;">
                <span class="visually-hidden"></span>
            </span>
            <span class="bi bi-bell text-white rounded-circle rounded-circle p-0 m-0" style="font-size: 25px;"></span>
        </button>

        <ul class="dropdown-menu m-0 end-50" aria-labelledby="dropdownMenuButtonSM" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-22px, 50px);">
            <li class="notification-item"><h6 class="dropdown-header">الاشعارات</h6></li>


            @foreach(Auth::user()->notifications as $not)
            <li> <hr class="dropdown-divider m-0 p-0"> </li>
                <li>
                    <div class="dropdown-item d-flex align-items-center px-3 py-3 " href="#">
                        <i class="bi  {{ $not->data['icon'] }}  mx-2 pe-3 " style="font-size: 24px;"></i>
                        <div>
                        <h6 class="m-0  ">{{  $not->data['title'] }}</h6>
                        <p class="m-0"><a href="{{ url('user', $not->data['username']) }}" class="text-primary text-decoration-underline" >{{  $not->data['user'] }}</a>  {{ $not->data['body'] }}</p>
                        <livewire:date :dt="$not->created_at" />
                    </div>

               </li>
            <li> <hr class="dropdown-divider m-0 p-0"> </li>

            @endforeach
            <li> <hr class="dropdown-divider m-0 p-0"> </li>
            <li>
                <div class="dropdown-item d-flex align-items-center px-3 py-3 " href="#">
                <i class="bi bi-hear text-success mx-2 pe-3 " style="font-size: 24px;"></i>
                <div>
                  <h6 class="m-0">تسجيل اعجاب جديد</h6>
                  <p class="m-0"><a href="#" class="text-primary" >محمد</a> سجل اعحاب sadasfdfdggdfgfgاعملك</p>
                  <p class="m-0">2 hrs. ago</p>
                </div>
            </div>
           </li>
           <li> <hr class="dropdown-divider m-0 p-0"> </li>

        </ul>
    </div>
</div> --}}

<div class="text-end  a" style="width: fit-content;">

<div class="dropdown ms-3  ">

    <button class="btn w-3 rounded-circle p-0  postion-relative " type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="true">
        @if(Auth::user()->image)

        <span class="position-absolute   translate-middle p-1 bg-danger badge border border-white rounded-circle  " style="top:8px; right: 90%;">
            <span class="visually-hidden"></span>
        </span>
        <img src="{{ '/storage/images/'.Auth::user()->image }}" class="rounded-circle rounded-circle p-0" style="width: 2.4rem; height: 2.4rem;" alt="" srcset="">

    @endif

    </button>

    <ul class="dropdown-menu m-0 end-50" aria-labelledby="dropdownMenuButtonSM" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-22px, 50px);">
        <li><h6 class="dropdown-header">{{ Auth::user()->name }}</h6></li>
        <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi bi-person-circle  text-start" ></i><span class="mx-2" >الملف الشخصي</span></a> </li>
        <li><a class="dropdown-item" href="{{ route('offer') }}"><i class="bi bi-gear-fill  text-start" ></i><span class="mx-2" >العروض</span></a> </li>

        <li><a class="dropdown-item" href="{{ route('profile.settings') }}"><i class="bi bi-gear-fill  text-start" ></i><span class="mx-2" >الاعدادات</span></a> </li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
            <i class="bi bi-box-arrow-left text-danger  text-start" ></i><span class="mx-2  text-danger" >تسجيل الخروج</span>
            </a>
        </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>
    </ul>
</div>

           </div>

            </div>


    @endguest



         </div>

         <div class=" navbar-collapse    collapse  navbar-collapse-md" id="collapsibleNavId123" >
            <hr class="bg-white text-white">
            <ul class="navbar-nav me-auto  ms-3 ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/">الرئسية  <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('works') }}">معرض الأعمال </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('open_works') }}">الاعمال المفتوحة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('worker') }}">العمال </a>
                </li>

            </ul>
              <div>

              </div>
            <form class="d-flex my-2 my-lg-0">

            </form>
         </div>

    </div>

</nav>
