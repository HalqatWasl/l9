<div  wire:model='msg'>

@if (session()->has('success'))

<div wire:poll class="position-fixed bottom-0 row  start-0 end-0 px-4  " >
   <div class="col-11 col-md-5  alert alert-success alert-dismissible fade show" role="alert">
       {{ session()->get('success') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
   </div>
</div>
@endif


@if (session()->has('error'))

<div class="position-fixed bottom-0 row  start-0 end-0 px-4  " >
   <div class="col-11 col-md-5  alert alert-danger alert-dismissible fade show" role="alert">
       {{ session()->get('error') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
   </div>
</div>
@endif


</div>
