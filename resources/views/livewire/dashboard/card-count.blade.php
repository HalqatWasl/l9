  
      <div class="card-body">
        <h5 class="card-title">{{ $title }}  </h5>
  
        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi {{ $icon }}"></i>
          </div>
          <div class="ps-3">
            <h6 wire:poll >{{ $userCount }}</h6>
             <span class="text-success small pt-1 fw-bold">8</span> <span class="text-muted small pt-2 ps-1"></span>
          </div>
        </div>
      </div>
  
    