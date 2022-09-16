<div class="row">
   <div class="text-end">
    <button type="button"  class="btn btn-primary btn-lg mx-2 d-lg-none" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click='modalShowM'>
        فـلاتـر
     </button>
   </div>
   <div class="col-4  d-none d-lg-block ">
         <div class="row  ">


         <div class="col-12  mt-3">
             <h4>فلتر</h4>
        <div class=" mb-6">
            <label>المحافظة</label>
            <select name="province_id"   wire:change='sel'  wire:model="select1" class=" form-select  " aria-label=".form-select-lg مثال" style="height: 50px">
                <option  value=" "  class="text-secondary" {{ ($departement_id == ' '  ?  'selected': '') }}>الكل </option>
              @foreach($provinces as $province)
                <option value="{{ $province->id }}" {{ ($province_id == $province->id  ?  'selected': '') }}> {{ $province->name }}</option>
                @endforeach

            </select>
        </div>
    </div>


    <div class="col-12 ">
        <div class=" mb-6">
            <label>المديرية</label>
            <select    class=" form-select" select  wire:model="directorateID"    aria-label=".form-select-lg مثال" style="height: 50px">
            
            @if($directorates)
                @foreach($directorates as $directorate)
                <option   value="{{ $directorate->id }}" {{ ($directorate_id == $directorate->id  ?  'selected': '') }}> {{ $directorate->name }}</option>
                @endforeach
            @endif

            </select>
            <div  class="spinner-grow text-primary"  role="status"  wire:loading wire:target="sel">
                <span class="visually-hidden">جار التحميل...</span>
              </div>
        </div>
    </div>




                    <div class=" mb-3 col-lg-12 m-0 p-0 px-2">
                        <label>المهنة</label>
                        <select name="departement"  wire:model="departemenID"  class="form-select  p-2" id="floatingSelect" aria-label="Floating label select example"  style="height: 50px" placeholder="Leave a comment here">
                            <option value=""  class="text-secondary" {{ ($departement_id == ' '  ?  'selected': '') }}>الكل </option>
                             @foreach($departements as $departement)
                                  <option value="{{ $departement->id }}" {{ ($departement_id == $departement->id  ?  'selected': '') }}>{{ $departement->name }} </option>
                             @endforeach


                        </select>

                    </div>


                    <div class="col-12 m-0 p-0 py-4 mx-2">

                        <button  class=" btn btn-primary  " wire:click="filter">
                             تطبيق  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true" wire:loading wire:target="filter"></span>

                        </button>

                    </div>
         </div>
   </div>

   <div class="col-12 col-lg-8 justify-content-center ">

    <div class="  w-100 justify-content-center align-items-center text-center "  wire:loading wire:target="filter"  role="status"  >
        <span  class=" text-center w-100 justify-content-center align-items-center text-center">
            <i class="spinner-border text-primary"></i>
        </span>
    </div>

      @if($users->count() == 0 )

        <div wire:loading.remove wire:target="filter" class="h-100 d-flex justify-content-center align-items-center">
            <h3  class=" text-muted ">لا يوجد</h3>
        </div>

      @endif

       @foreach($users as $user)



            <div class="card m-2" >
                <div class="card-body m-auto w-100   d-lg-flex shadow-sm text-center text-lg-start g-2 ">
                <img src="{{ '/storage/images/'.$user->image }}" alt="" class="card-img-top rounded-circle m-auto ms-1   mb-3 mb-lg-0" style="width: 4rem; height:4rem ; " srcset="">

                <div class=" w-100  g-2 mb-3 mb-lg-0">
                    <h6 class="m-auto d-lg-flex align-items-baseline   mb-2 mb-lg-0">

                        <a class="nav-link p-1 m-0 h5  mb-2 mb-lg-0"  href="{{ url('user', $user->username) }}"> {{ $user->name }} </a>


                        @php


                        if ($user->evaluation->count() != 0) {

                             $count =$user->evaluation->count();
                             $eva  = $user->evaluation->sum('evaluation') / $count   ;
                             $t=$eva;
                        }
                        else
                        {
                         $count =0;
                         $eva = 0;
                         $t=$eva;
                        }

                     @endphp

                         <span  class="bi   me-2">({{ $count }}) </span>
                         <span  class="bi  h5 text-warning {{ ($t >= 0.4  ?  'bi-star-fill': 'bi-star') }}" ></span>
                         <span  class="bi  h5 text-warning {{ ($t >= 1.4  ?  'bi-star-fill': 'bi-star') }}"></span>
                         <span  class="bi  h5 text-warning {{ ($t >= 2.4  ?  'bi-star-fill': 'bi-star') }}"></span>
                         <span  class="bi  h5 text-warning {{ ($t >= 3.4  ?  'bi-star-fill': 'bi-star') }}" ></span>
                         <span  class="bi  h5 text-warning {{ ($t >= 4.5  ?  'bi-star-fill': 'bi-star') }}" ></span>
                          <span  class="bi ms-1 ">{{ number_format( $t ,'1')  }}</span>
                    </h6>

                    <span  class="text-muted m-auto  p-0 ms-1 " style="font-size: 0.9rem;">
                        <i class='bi bi-geo-alt-fill' style="font-size: 0.9rem;"></i>
                            @if($user->citys_id !== null)
                                  {{ $user->directorates->province->name }}
                                  {{ '-' }}
                                  {{ $user->directorates->name }}
                            @endif
                    </span>
                    <span  class="text-muted m-auto  p-0 ms-1 " style="font-size: 0.9rem;">
                        <i class='bi bi-briefcase' style="font-size: 0.9rem;"></i>
                            @if($user->departement)
                                  {{ $user->departement->name }}
                            @endif
                    </span>

                    <span  class="text-muted m-auto  p-0 ms-1" style="font-size: 0.9rem;"><i class="bi bi-clock  " style="font-size: 0.9rem;"></i>  منذ أسبوعين  </span>

                </div>

                    <div class="  d-flex float-end align-items-center   ">
                    <a class="btn btn-primary  "  href="{{ url('user', $user->username) }}">المزيد</a>
                    </div>

                </div>
            </div>

       @endforeach



       <!-- <div class="card" >
        <div class="card-body m-auto w-100 d-flex shadow-sm  ">
           <img src="/storage/images/2.jpg" alt="" class="card-img-top rounded-circle m-auto ms-1 " style="width: 4rem; height:4rem ; " srcset="">

           <div class="mx-2 w-100 ">
               <h6 class="m-auto d-flex align-items-baseline">

                   <a class="nav-link p-1 m-0 h5" href="http://localhost:8000/user/U1iJ3gOcip-629d0c39e3ca3"> صالح السنباني </a>

                   <span  class="bi   me-2"></span>
                   <span  class="bi  h6 text-warning bi-star-fill" ></span>
                   <span  class="bi  h6 text-warning bi-star-fill" ></span>
                   <span  class="bi  h6 text-warning bi-star-fill" ></span>
                   <span  class="bi  h6 text-warning bi-star" ></span>
                   <span  class="bi  h6 text-warning bi-star" ></span>
                    <span  class="bi ms-1 "></span>
               </h6>

               <span  class="text-muted m-auto  p-0 ms-1 " style="font-size: 0.9rem;"><i class="bi bi-clock  " style="font-size: 0.9rem;"></i>  منذ أسبوعين  </span>
               <span  class="text-muted m-auto  p-0 ms-1" style="font-size: 0.9rem;"><i class="bi bi-clock  " style="font-size: 0.9rem;"></i>  منذ أسبوعين  </span>
               <span  class="text-muted m-auto  p-0 ms-1" style="font-size: 0.9rem;"><i class="bi bi-clock  " style="font-size: 0.9rem;"></i>  منذ أسبوعين  </span>

           </div>

             <div class="  d-flex float-end align-items-center   ">
               <a class="btn btn-primary  ">المزيد</a>
             </div>

        </div>
      </div> -->

      <div >
        {{ $users->links() }}
    </div>
   </div>


   <!-- Modal -->
<div wire:ignore.self class="modal fade  " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body pt-5">

                <div class="row  ">


                    <div class="col-12  mt-5">
                        <h4 class="pb-2">فــلاتـر</h4>
                   <div class=" mb-6">
                       <label>المحافظة</label>
                       <select name="province_id"   wire:change='sel'  wire:model="select1" class=" form-select  " aria-label=".form-select-lg مثال" style="height: 50px">
                           <option  value=" "  class="text-secondary" {{ ($departement_id == ' '  ?  'selected': '') }}>الكل </option>
                         @foreach($provinces as $province)
                           <option value="{{ $province->id }}" {{ ($province_id == $province->id  ?  'selected': '') }}> {{ $province->name }}</option>
                           @endforeach

                       </select>
                   </div>
               </div>


               <div class="col-12 ">
                   <div class=" mb-6">
                       <label>المديرية</label>
                       <select    class=" form-select"  wire:model="directorateID"    aria-label=".form-select-lg مثال" style="height: 50px">

                       @if($directorates)
                           @foreach($directorates as $directorate)
                           <option  value="{{ $directorate->id }}" {{ ($directorate_id == $directorate->id  ?  'selected': '') }}> {{ $directorate->name }}</option>
                           @endforeach
                           @endif

                       </select>
                       <div  class="spinner-grow text-primary"  role="status"  wire:loading wire:target="sel">
                           <span class="visually-hidden">جار التحميل...</span>
                         </div>
                   </div>
               </div>




                               <div class=" mb-3 col-lg-12 m-0 p-0 px-2">
                                   <label>المهنة</label>
                                   <select name="departement"  wire:model="departemenID"  class="form-select  p-2" id="floatingSelect" aria-label="Floating label select example"  style="height: 50px" placeholder="Leave a comment here">
                                       <option data-display="" value=" "  class="text-secondary" {{ ($departement_id == ' '  ?  'selected': '') }}>الكل </option>
                                        @foreach($departements as $departement)
                                             <option value="{{ $departement->id }}" {{ ($departement_id == $departement->id  ?  'selected': '') }}>{{ $departement->name }} </option>
                                        @endforeach


                                   </select>

                               </div>


                               <!-- <div class="col-12 m-0 p-0 p-4">

                                   <button  class=" btn btn-primary " wire:click.prevent="filter()">
                                        بحث  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true" wire:loading wire:target="filter"></span>
                                       <i class='bx bx-search'  wire:loading.remove></i>
                                   </button>
                                   <div  class="spinner-grow text-primary"  role="status"  wire:loading wire:target="filter">
                                       <span class="visually-hidden">جار التحميل...</span>
                                     </div>
                               </div> -->
                    </div>
            </div>
           <div class="modal-footer justify-content-start ">
            <button type="button" class="btn btn-primary" wire:click.prevent="filter()" >
                تطبيق

                 <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true" wire:loading wire:target="filter"></span>
          </button>
                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">إغلاق</button>

            </div>
        </div>
    </div>
</div>

</div>
