

<div class="col-xxl-3 col-md-4">
                <div class="card info-card revenue-card">

                  <div class="card-body">
                    <h5 class="card-title">عدد المستخدمين <span>| اليوم</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6 wire:poll >{{  number_format($countUser,0 ) }}</h6>
                        <span class="text-success small pt-1 fw-bold">{{   number_format($countUserNew,0 )  }}</span> 
                        <span class="bx bxs-up-arrow text-success small pt-2 ps-1 "></span>
                      </div>
                    </div>
                  </div>

                </div>
</div>

<div class="col-xxl-3 col-md-4">
  <div class="card info-card revenue-card">

  

    <div class="card-body">
      <h5 class="card-title"> <span> عدد |</span> العمال</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people-fill"></i>
        </div>
        <div class="ps-3">
          <h6 wire:poll >{{   number_format($work ,0 ) }}</h6>
           <span class="text-success small pt-1 fw-bold">{{   number_format($workNew ,0 ) }}</span> <span class="text-muted small pt-2 ps-1">عامل جديد</span>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="col-xxl-3 col-md-4">
  <div class="card info-card revenue-card">

  

    <div class="card-body">
      <h5 class="card-title"> <span> عدد |</span> اصحاب الاعمال </h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people-fill"></i>
        </div>
        <div class="ps-3">
          <h6 wire:poll >{{   number_format($bsins ,1 ) }}</h6>
           <span class="text-success small pt-1 fw-bold">{{   number_format($bsinsNew ,1 ) }}</span> <span class="text-muted small pt-2 ps-1"> جديد</span>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="col-xxl-3 col-md-4">
  <div class="card info-card revenue-card text-muted">

    <div class="card-body">
      <h5 class="card-title"> <span> عدد |</span> العمال , أصحاب الاعمال</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people-fill"></i>
        </div>
        <div class="ps-3">
          <h6 wire:poll >{{    number_format($workOrBsins ,1 )}}</h6>
           <span class="text-success small pt-1 fw-bold">{{ number_format($workOrBsinsNew  ,1 ) }}</span> <span class="text-muted small pt-2 ps-1"> جديد</span>
        </div>
      </div>
    </div>

  </div>
</div>