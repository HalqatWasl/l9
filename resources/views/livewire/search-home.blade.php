
<form class="find-form " action="{{ route('worker.search') }}" method="POST">
    @csrf
                            <div class="row">
                                <!-- <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ابحث باسم المهنة العنوان">
                                        <i class="bx bx-search-alt"></i>
                                    </div>
                                </div> -->


                                <div class="col-lg-3">
                                    <label>المحافظة</label>
                                        <div class="form-group text-start">
                                            <select name="province_id"   wire:change='sel'  wire:model="select1" class=" form-select  " aria-label=".form-select-lg مثال" style="height: 50px">
                                            <option data-display="" value=" "  class="text-secondary" > </option>
                                                @foreach($provinces as $province)
                                                  <option value="{{ $province->id }}" {{ ($province_id == $province->id  ?  'selected': '') }}> {{ $province->name }}</option>
                                                  @endforeach

                                              </select>
                                            <!-- <i class="bx bx-location-plus  mx-0 end-50"></i> -->
                                        </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="العنوان">
                                        <i class="bx bx-location-plus"></i>
                                    </div>
                                </div> -->

                           <div class="col-lg-3">
                                <label>المديرية</label>
                                    <div class="form-group text-start">
                                        <select   name="directorate_id"  class=" form-select    " aria-label=".form-select-lg مثال" style="height: 50px">

                                        @if($directorates)
                                            @foreach($directorates as $directorate)
                                            <option  value="{{ $directorate->id }}" > {{ $directorate->name }}</option>
                                            @endforeach
                                            @endif

                                        </select>
                                        <i wire:loading wire:target="sel"  class="spinner-border   top-0 mt-2 end-50"></i>
                                    </div>
                            </div>

                            <div class="col-lg-3">
                                <label>المهنة</label>
                                    <div class="form-group text-start">
                                        <select   name="departement_id"  class=" form-select    " aria-label=".form-select-lg مثال" style="height: 50px">

                                            <option data-display="" value=" "  class="text-secondary" >الكل </option>
                                            @foreach($departements as $departement)
                                                 <option value="{{ $departement->id }}" >{{ $departement->name }} </option>
                                            @endforeach


                                        </select>
                                        <!-- <i class="bx bx-location-plus  mx-0 end-50"></i> -->
                                    </div>
                            </div>



                                <!-- <div class=" mb-3 col-lg-3">
                                    <select class="form-select p-3" id="floatingSelect" aria-label="Floating label select example"  placeholder="Leave a comment here">
                                        <option data-display="" class="text-secondary">التصنيفات </option>
                                        <option value="1">سباكة </option>
                                        <option value="2"> حدادة</option>
                                        <option value="4">لحام </option>
                                        <option value="5">تبليط</option>
                                        <option value="6">نجارة </option>
                                    </select>
                                  <label for="floatingSelect" class="mx-1">المهن</label>
                                  </div> -->


                                <div class="col-lg-3 pt-1">
                                    <button type="submit" class="find-btn mt-3  ">
                                       ابحث عن عامل
                                        <i class='bx bx-search'></i>
                                    </button>
                                </div>
                            </div>
                        </form>

