
  <div class="col-xxl-3 col-md-4">
        <div class="card info-card revenue-card">

     
          <div class="card-body">
            <h5 class="card-title">مستخدم جديد <span>|  اليوم</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon  rounded-circle d-flex align-items-center justify-content-center ">
                <i class="bi bi-person-plus-fill"></i>
              </div>
              <div class="ps-3" wire:poll>
                <h6  >{{ $count }}</h6>
               

                @if($count1 < 0)
                    <span class="text-danger small pt-1 fw-bold">{{ number_format($count1,1 ) }}</span> 
                    <span class="bx bx-caret-down text-danger small pt-2 ps-1 "></span>
                @elseif($count1 > 0)
                     <span class="text-success small pt-1 fw-bold">{{ number_format($count1,0 ) }}</span> 
                     <span class="bx bxs-up-arrow text-success small pt-2 ps-1 "></span>
                @else
                     <span class="text-muted small pt-1 fw-bold">{{ number_format($count1,0 ) }}</span> 
                    <span class="bx bxs-up- text-muted  pt-2 ps-1 fw-bold">ــ</span>
                @endif
              </div>
            </div>
          </div>

        </div>
  </div><!-- End Sales Card -->
