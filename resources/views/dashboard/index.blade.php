@extends('dashboard.app')

@section('content')



    {{-- <div class="pagetitle mt-5 pt-4 mx-4">
      <h1>لوحة التحكم</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
          <li class="breadcrumb-item active">لوحة التحكم</li>
        </ol>
      </nav>
    </div><!-- End Page Title --> --}}

    <section class="section dashboard  mt-5 pt-4 mx-3">
      <div class="row">

    

       
        <div class="col-lg-12">
            <div class="row">
                <h3 class="m-3">المستخدمين</h3>
        
                    <livewire:dashboard.count-user-new>

                    <livewire:dashboard.count-user>
            </div>

        </div>
           

      

          
        
      

        <div class="col-lg-12  row">
            <h3 class="m-3">الاعمال المفتوحة</h3>

            <div class="col-xxl-4 col-md-3">
                <div class="card info-card sales-card">
  
               
                  <div class="card-body">
                    <h5 class="card-title">الاعمال المفتوحة </h5>
  
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-hammer"></i>
                        </div>
                      <div class="ps-3">
                        <h6>{{ App\Models\Open_work::all()->count() }}</h6>
                        <span class=" small pt-1 fw-bold">عمل</span> <span class="text-muted small pt-2 ps-1"></span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
            </div>

            <div class="col-xxl-4 col-md-3">
                <div class="card info-card revenue-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title"> <span> الاعمال المفتوحة |</span> متوفر   </h5>
  
                    <div class="d-flex align-items-center">

                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-hammer"></i>
                          </div>
                       
                      <div class="ps-3">
                        <h6>{{ App\Models\Open_work::where('stage','1')->count() }}</h6>
                        <span class=" small pt-1 fw-bold">عمل</span> <span class="text-muted small pt-2 ps-1"></span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
            </div>
            
            <div class="col-xxl-4 col-md-3">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title"> <span> الاعمال المفتوحة |</span> يعمل  </h5>
  
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-hammer"></i>
                        </div>
                      <div class="ps-3">
                        <h6>{{ App\Models\Open_work::where('stage','2')->count() }}</h6>
                        <span class=" small pt-1 fw-bold">عمل</span> <span class="text-muted small pt-2 ps-1"></span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
            </div>

            <div class="col-xxl-4 col-md-3">
                <div class="card info-card customers-card sales-card ">
                  <div class="card-body">
                    <h5 class="card-title"> <span> الاعمال المفتوحة |</span> مكتمل   </h5>
  
                    <div class="d-flex align-items-center">
                        
                        <div class="card-icon rounded-circle customers-card d-flex align-items-center justify-content-center">
                            <i class="bi bi-hammer"></i>
                        </div>
                      <div class="ps-3">
                        <h6>{{ App\Models\Open_work::where('stage','3')->count() }}</h6>
                        <span class=" small pt-1 fw-bold">عمل</span> <span class="text-muted small pt-2 ps-1"></span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
            </div>

        </div>



        <div class="col-lg-12  row">
            <h3 class="m-3">معرض الاعمال </h3>

            <div class="col-xxl-4 col-md-3">
                <div class="card info-card sales-card">
  
               
                  <div class="card-body">
                    <h5 class="card-title">معرض الاعمال </h5>
  
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-images"></i>
                        </div>
                      <div class="ps-3">
                        <h6>{{ App\Models\Work::all()->count() }}</h6>
                        <span class=" small pt-1 fw-bold">عمل</span> <span class="text-muted small pt-2 ps-1"> معروض</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
            </div>

            <div class="col-xxl-4 col-md-3">
                <div class="card info-card customers-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title"> <span> معرض الاعمال  |</span> الاعجابات   </h5>
  
                    <div class="d-flex align-items-center">

                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-heart-fill"></i>
                          </div>
                       
                      <div class="ps-3">
                        <h6>{{ App\Models\Like::all()->count() }}</h6>
                        <span class=" small pt-1 fw-bold">اعجاب</span> <span class="text-muted small pt-2 ps-1"></span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
            </div>
            
         

         

        </div>

      </div>
    </section>


@endsection
