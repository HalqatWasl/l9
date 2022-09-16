<div class="row d-flex">
     <div  class=" col-6">
     <!-- <h2 class="text-start float-start"> الاعمال المفتوحة</h2> -->
     </div>
    <div class="col-6">
        <div class="btn-group float-end">
            <button wire:ignore.self class="btn btn-primary  dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    فــلاتـر
            </button>
            <div wire:ignore.self class="dropdown-menu dropdown-menu-end" aria-labelledby="triggerId">

                    <h6 class="dropdown-header ">فلاتر <span class="bx bx-filter-alt"></span></h6>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header w-100 row m-0 mb-3 p-0">
                        <div class="col-md-12 ">
                            <div class="form-group mb-12">
                                <label>المهنة</label>
                                <select  wire:model='departement_id' name="directorate_id"  class="form-control form-select form-control " aria-label=".form-select-lg مثال">
                                    <option value="" > الكل</option>
                                    @if($departements)
                                    @foreach($departements as $departement)
                                    <option  value="{{ $departement->id }}"> {{ $departement->name }}</option>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header w-100 row m-0 mb-3 p-0">
                        <div class="col-md-12 ">
                            <div class="form-group mb-12">
                                <label>المحافظة</label>
                                <select  wire:model='province_id'  name="province_id"  class="form-control form-select form-control " aria-label=".form-select-lg مثال">
                                    <option  value="" > الكل</option>
                                    @if($provinces)
                                    @foreach($provinces as $province)
                                    <option  value="{{ $province->id }}"> {{ $province->name }}</option>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>


<div  class="g-2 ">


@foreach($Open_work as $work)


                   <div class="col-lg-12 m-1">

                    <div class="job-card-two card shadow-none">
                           @if($user_id)
                                <div class="position-absolute top-0 end-0 m-3">
                                    <h3>
                                        @if($work->stage==1)
                                          <span class="badge bg-success">مفتوح</span>
                                        @elseif($work->stage==2)
                                          <span class="badge bg-warning">جاري التنفيذ</span>
                                        @else
                                          <span class="badge bg-danger">مكتمل</span>
                                        @endif
                                    </h3>
                                </div>

                           @endif
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <div class="job-info">
                                    <h3>
                                        <a href="{{ url('w', [$work->id]) }}" class="text-primary">{{ $work->title }}</a>
                                    </h3>
                                    <ul>
                                        <li>
                                            <i  class="bx bx-stopwatch"></i>
                                               @php
                                                  $date=  Carbon\Carbon::parse($work->created_at)->locale('ar_AR');
                                                  $date=  $date->diffForHumans();
                                               @endphp
                                               {{ $date }}
                                          </li>

                                         <li>
                                           <i class="bx bxs-coupon"></i>
                                           @if($work->offers->count()==0)
                                              {{'لايوجد عروض'}}
                                            @elseif($work->offers->count()==1)
                                             {{'عرض واحد'}}
                                            @elseif($work->offers->count()==2)
                                             {{'عرضين'}}
                                            @else
                                              {{ $work->offers->count() }}
                                             {{'عرض'}}
                                           @endif
                                        </li>
                                        <li>
                                            <i class="bx bx-briefcase"></i>
                                            {{$work->departement->name }}
                                         </li>
                                        <li>
                                            <i class="bx bx-money"></i>
                                            {{$work->pric }}
                                        </li>
                                        <li>
                                            <i class="bx bx-map"></i>
                                             {{$work->directorate->province->name }} -
                                             {{$work->directorate->name }}
                                        </li>


                                    </ul>


                                </div>
                            </div>
                          <div class="col-md-9">
                              <div class="job-info text-dark">
                                  <p class="text-dark" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                      {{ $work->description }}
                                  </p>
                              </div>
                          </div>
                            <div class="col-md-3">

                                <div class="theme-btn text-end">
                                    <a href="{{ url('w', [$work->id]) }}" class="btn btn-primary p-2 px-3 fs-6">
                                       عـرض العـمل
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
@endforeach






                <div style="overflow: hidden; width: 100%;">
                    {{ $Open_work->onEachSide(2)->links() }}
                </div>



</div>

</div>
