@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<!-- Banner Section Start -->
<div class="banner-section banner-style-five">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container    ">

						<div class="banner-content ">
                            <div class="col-12  " style="z-index: 100;">

                                <h1 class="text-white fs-1" style="height: 50px;" >أنجز اعمالك بسهولة وأمان

                                  وظّف
                                <span class=" typewrite   shadow-lg" data-period="4000" data-type="[
                                    &quot;عامل بناء .&quot;,
                                    &quot; سباك. &quot;,
                                    &quot; كهربائي. &quot;,
                                    &quot; مهني &quot;
                                 ]"><span class="wrap">مزارع .<span class="i">|</span></span></span>


                             </h1>
                            </div>
                        </div>

                             <livewire:search-home>
					</div>
				</div>
			</div>
</div>
        <!-- Banner Section End -->




          <!-- Category Section Start -->
          <section class="categories-section category-style-three pt-5 pb-70 ">
            <div class="container">
                <div class="section-title text-center mb-4">
                    <h2>الكثير من المهن</h2>
                    <p>أختار المهنه التي تناسب عملك </p>
                </div>
                <div class="row">



                    @foreach($departements as $departement)

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a >
                                <div class="category-card">
                                    <i class='flaticon-worker'></i>
                                    <h3>{{ $departement->name }}</h3>
                                    <p>{{ $departement->user->count() }}</p>
                                </div>
                            </a>
                        </div>

                    @endforeach


                    {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="job-list.html">
                            <div class="category-card">
                                <i class='flaticon-wrench-and-screwdriver-in-cross'></i>
                                <h3>المزيد </h3>
                                <p>-<</p>
                            </div>
                        </a>
                    </div> --}}

                </div>
            </div>
         </section>
        <!-- Category Section End -->


        <section class="choose-style-two why-choose bg-white ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="why-choose-text pt-100 pb-70">
                            <div class="section-title">
                                <h2>لماذا حلقة وصل ؟ </h2>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <i class="flaticon-group align-self-top mr-3"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">تحتوي على عمال متميزين </h5>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="media">
                                        <i class="flaticon-research align-self-top mr-3"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">سهله للبحث عن الاعمال </h5>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="media">
                                        <i class="flaticon-discussion align-self-top mr-3"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">سهله التواصل</h5>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="media">
                                        <i class="flaticon-recruitment align-self-top mr-3"></i>
                                        <div class="media-body">
                                            <h5 class="mt-0">توفر خيارات عامة للبحث </h5>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-8 offset-sm-2 offset-lg-0">
                        <img src="assets/img/close-up-hard-hat-holding-by-construction-worker.png" alt="why choose image">
                    </div>
                </div>
            </div>
        </section>



<section class="company-location pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>المحافظات</h2>
                    <p>التوفر في كل الجمهوية اليمنية </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/location/s5.png" alt="location image">

                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>اب</h3>
                                            <!-- <span>376 عامل </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <a href="job-list.html" >
                            <div class="location-img ">
                                <img src="assets/img/location/s3.png" alt="location image">

                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>تعز</h3>
                                            <!-- <span>106  عامل</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/location/s1.png" alt="location image">

                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>صنعاء</h3>
                                            <!-- <span>476 عامل</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="job-list.html">
                            <div class="location-img">
                                <img src="assets/img/location/s2.png" alt="location image">

                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>ذمار</h3>
                                            <!-- <span>206 عامل</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <a >
                            <div class="location-img">
                                <img src="assets/img/location/s6.png" alt="location image">

                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>الحديدة</h3>
                                            <!-- <span>12 مديرية</span> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <a>
                            <div class="location-img">
                                <img src="assets/img/location/s4.png" alt="location image">

                                <div class="location-text">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <h3>حضرموت</h3>
                                            <!-- <span>1246
                                                 عمل</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
</section>






<div class="counter-section pt-100 pb-70">
    <div class="container">
        <div class="row counter-area">
            <div class="col-lg-3 col-6">
                <div class="counter-text">
                    <i class=" bi bi-briefcase"></i>
                    <h2><span>{{ App\Models\Open_work::all()->count()}}</span></h2>
                    <p> عمل مفتوح </p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="counter-text">
                    <i class="flaticon-worker"></i>
                    <h2><span>{{ App\Models\User::where('user_type','1')->count() + App\Models\User::where('user_type','3')->count()}}</span></h2>
                    <p> عامل </p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="counter-text">
                    <i class=" flaticon-employee"></i>
                    <h2><span>{{ App\Models\User::where('user_type','>','1')->count() }}</span></h2>
                    <p>صاحب عمل </p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="counter-text">
                    <i class="flaticon-resume  "></i>
                    <h2><span>{{ App\Models\Offer::all()->count() }}</span></h2>
                    <p>تقديم للاعمال</p>
                </div>
            </div>
        </div>
    </div>
</div>

	<!-- Candidate Section Start -->
    <section class="candidate-section ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>العمال الاكثر تقيماً</h2>
                <!-- <p>منصة "حلقة وصل" تربط أصحاب الخبرات الباحثين عن فرصة عمل مع الجهات (أفراد، شركات، مؤسسات...) الذين ليس لديهم الوقت الكافي للبحث عن</p> -->
            </div>

            <div class="condidate-slider owl-carousel owl-theme">

             @foreach($evaluation as $evaluation)

             <div class="condidate-item">
                <div class="candidate-img">
                    <img src="{{ '/storage/images/'.$evaluation->user->image }}" alt="candidate image" style="height:20rem; width: 30rem;">
                </div>
                <div class="candidate-social bg-white candidate-text">



                            @php
                                $eva = $evaluation->total / $evaluation->count;
                                $t=$eva;

                            @endphp
                            <div class=" text-black">
                                <i class="bi bi-telephone-fill me-2 text-success"></i>
                                <a href="tel:{{  $evaluation->user->phone }}" class=" text-dark h5">{{  $evaluation->user->phone }}</a>
                            </div>

                </div>
                <div class="candidate-text">
                    <h3><a href="{{ url('user', $evaluation->user->username) }}">{{ $evaluation->user->name }}</a></h3>
                    <ul class="d-flex justify-content-center">
                        <li class="me-1">
                            <i class='bx bx-briefcase'></i>

                            @if($evaluation->user->departement)
                                  {{ $evaluation->user->departement->name }}
                            @endif


                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            @if($evaluation->user->citys_id !== null)
                                  {{ $evaluation->user->directorates->province->name }}
                                  {{ '-' }}
                                  {{ $evaluation->user->directorates->name }}
                            @endif
                        </li>
                    </ul>

                    <div class="bottom-text">

                    <span  class="bi   me-2">({{ $evaluation->count }})</span>
                                <span  class="bi  h5 text-warning {{ ($t >= 1  ?  'bi-star-fill': 'bi-star') }}" ></span>
                                <span  class="bi  h5 text-warning {{ ($t >= 2  ?  'bi-star-fill': 'bi-star') }}"></span>
                                <span  class="bi  h5 text-warning {{ ($t >= 3  ?  'bi-star-fill': 'bi-star') }}"></span>
                                <span  class="bi  h5 text-warning {{ ($t >= 4  ?  'bi-star-fill': 'bi-star') }}" ></span>
                                <span  class="bi  h5 text-warning {{ ($t >= 5  ?  'bi-star-fill': 'bi-star') }}" ></span>
                                 <span  class="bi ms-1 ">{{ number_format( $t ,'1')  }}</span>

                    </div>
                </div>
            </div>
             @endforeach



            </div>
        </div>
    </section>

    <div class=" pt-100 pb-70 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="looking-job">
                        <div class="media">
                            <i class="flaticon-worker align-self-start mr-3 rounded-circle" style="height: 3.3rem; width: 3.9rem;"> </i>
                            <div class="media-body">
                                <h5 class="mt-0">ابحث عن عمل</h5>
                                <p>لمعرفة كافة الاعمال المطلوبة حاليا يرجئ الذهاب لصفحة الاعمال عبر المزيد</p>

                                <a href="{{  route('open_works') }}">
                                المزيد
                                    <i class="bx bx-chevrons-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="looking-job">
                        <div class="media">
                            <i class="flaticon-worker align-self-start mr-3 rounded-circle" style="height: 3.3rem; width: 3.9rem;"> </i>
                            <div class="media-body">
                                <h5 class="mt-0">ابحث عن عامل</h5>
                                <p>لمعرفة كافة العمال المتوفرين حاليا يرجى الذهاب لصفحة العمال عبر المزيد</p>

                                <a href="{{ route('worker')  }}">
                                المزيد
                                    <i class="bx bx-chevrons-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Candidate Section End -->

        <script>
            var TxtType = function(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 1) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };

            TxtType.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">'+this.txt+'<span class="i">|</span></span>';

                var that = this;
                var delta = 200 - Math.random() * 100;

                if (this.isDeleting) { delta /= 2; }

                if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
                }

                setTimeout(function() {
                that.tick();
                }, delta);
            };
            var load =document.getElementById('load');
            window.onload = function() {

                var elements = document.getElementsByClassName('typewrite');
                for (var i=0; i<elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                      new TxtType(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".typewrite > .wrap { border-left: 0.00em solid #fff}";
                document.body.appendChild(css);
            }



        </script>


        <!-- <script src="assets/js/jquery.min.js"></script> -->
		<!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->
		<!-- Owl Carousel JS -->

		<!-- Nice Select JS -->
		<!-- <script src="assets/js/jquery.nice-select.min.js"></script> -->
		<!-- Magnific Popup JS -->
		<!-- <script src="assets/js/jquery.magnific-popup.min.js"></script> -->
		<!-- Subscriber Form JS -->
		<!-- <script src="assets/js/jquery.ajaxchimp.min.js"></script> -->
		<!-- Form Velidation JS -->
		<!-- <script src="assets/js/form-validator.min.js"></script> -->
		<!-- Contact Form -->
		<!-- <script src="assets/js/contact-form-script.js"></script> -->
		<!-- Meanmenu JS -->
		<!-- <script src="assets/js/meanmenu.js"></script> -->
		<!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
@endsection
