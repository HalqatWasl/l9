 <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" style="position: relative; overflow: hidden; min-height: 400px">
     <div class="dataTable-top">
        <div class="dataTable-dropdown">
            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#userAdd">
                  جديد
              </button>

          </div>



        <div class="dataTable-search">
            <input class="dataTable-input" wire:model="search" placeholder="Search..." type="text">
        </div>
    </div>
    <div class="dataTable-container" style="position:static; width:auto; height: inherit; top: 0 ; bottom: 0; left: 100;" >
               <table class="table datatable dataTable-table table-sm  text-start" >
                <thead class="text-start">
                    <tr>
                        <th scope="col" class="text-center " >
                            #
                        </th>
                        <th scope="col " class="text-center " data-sortable="" >
                           الاسم
                        </th>
                        <th scope="col" class="text-center " data-sortable=""  >
                          البريد الأكتروني
                        </th>
                        <th scope="col" class="text-center " data-sortable=""  >
                           نوع الحساب
                        </th>
                        <th scope="col" class="text-center " data-sortable=""  >
                           المهنة
                        </th>
                        <th scope="col" class="text-center " data-sortable="class=text-center " >
                            العنوان
                        </th>
                        <th  class="text-center "  data-sortable="" >
                           الحالة
                        </th>
                        <th  class="text-center "  data-sortable="" >
                       المزيد
                        </th>
                    </tr>
                </thead>
                <tbody class="text-start">

                    @foreach($users as $user)
                        <tr class="text-center">
                            <th scope="col" class="text-center"  >{{ $user->id }}</th>
                            <td class="text-centers"> {{ $user->name }}</td>
                            <td class="text-centers"> {{ $user->email }}</td>

                            <td class="text-center">

                               @if( $user->user_type == 0)
                                  <span class="badge bg-danger">لم يحدد</span>
                               @elseif($user->user_type == 1)
                                   <span class="badge bg-warning text-dark"> عامل</span>
                               @elseif($user->user_type == 2)
                                   <span class="badge bg-primary ">صاحب أعمال</span>
                               @else
                                <span class="badge bg-primary ">صاحب أعمال</span>
                                ,
                                <span class="badge bg-warning text-dark">عامل</span>
                               @endif

                            </td>
                            <td class="text-center ">
                                @if($user->departement )
                                   {{ $user->departement->name }}
                                @else
                                       {{ '-' }}
                                @endif

                            </td>
                            <td class="text-center ">
                             @if($user->directorates )
                                {{ $user->directorates->province->name }}
                                {{ '-' }}
                                {{ $user->directorates->name }}
                             @else
                                    {{ '-' }}
                             @endif
                            </td>
                            <td class="text-center justify-content-center w-auto">
                                <div class=" form-switch w-100  ">
                                    <input   class="form-check-input " type="checkbox" id="flexSwitchCheckChecked"
                                       wire:click="is_active1('{{$user->id}}')"    {{ (($user->is_active == 1)? 'checked' : '')   }}
                                     >
                                </div>
                            </td>
                            <td class="text-center">
                              {{-- <!-- <livewire:dashboard.user-edit :username="$user->username"/> --> --}}


                              <div class="dropdown ">
                                  <button class="btn btn-link " type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                          aria-expanded="false">
                                             <span class="bi bi-three-dots-vertical"></span>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="triggerId">

                                    <button type="button" class=" btn btn-primary w-100 " wire:click="showDataUser('{{ $user->username }}')"   data-bs-toggle="modal" data-bs-target="#modelId1">
                                        تـعـديـل
                                        <span class="bi bi-pencil-square"></span>
                                     </button>
                                     <button type="button" class="btn btn-primary w-100  mt-2 " wire:click="showDataUser('{{ $user->username }}')"   data-bs-toggle="modal" data-bs-target="#modelId2">
                                        معلومات
                                        <span class="bi bi-pencil-square"></span>
                                     </button>

                                  </div>
                              </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
               </table>

    </div>
                {{ $users->links() }}

<!-- Modal ADD User -->
<div wire:ignore.self class="modal " id="userAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class=" modal-dialog modal-fullscreen  " role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title"> اضاقة مستخدم</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body text-start">

              <form class="row g-2 needs-validation" novalidate>

                  <div class="col-md-4 mb-2">
                      <div class="form-group">
                          <label> الاسم</label>
                          <input name="name" type="text" wire:model='userAdd.name' class="form-control " placeholder="ادخل الاسم"  >
                      </div>
                  </div>

                  <div class="col-md-4 mb-2">
                      <div class="form-group">
                          <label>بريدك الاليكتروني</label>
                          <input name="email" type="email" wire:model="userAdd.email" class="form-control " placeholder="سجل البريد الصحيح">
                      </div>
                  </div>

                  <div class="col-md-4  mb-2">
                      <div class="form-group">
                          <label> رقم التلفون </label>
                          <input name="numphone" wire:model='userAdd.phone' type="number" class="form-control " placeholder="سجل رقم الهاتف" >
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                          <label>  الحساب</label>
                          <select name="departement_id" wire:model='userAdd.is_admin' class=" form-select form-control">
                              <option value="0" > عادي </option>
                              <option value="1" > ادمن </option>
                          </select>
                      </div>
                    </div>

                  <div class="col-md-4">
                      <div class="form-group">
                          <label> نوع الحساب</label>
                          <select name="departement_id" wire:model='userAdd.user_type' class=" form-select form-control">
                              <option value="0" > لايوجد</option>
                              <option value="1" > عامل </option>
                              <option value="2" > صاحب اعمال</option>
                              <option  value="3" > عامل , صاحب اعمال</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                          <label>المهنة </label>
                          <select name="departement_id" wire:model='userAdd.departement_id' class=" form-select form-control">
                              <option value="" >  لايوجد</option>

                              @foreach($dep as $departemen)


                                  <option  value="{{ $departemen->id }}">{{ $departemen->name }}</option>


                              @endforeach
                          </select>
                      </div>
                    </div>





                <div class="col-md-8  p-0">
                  <livewire:counter />
                </div>



                <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">وصف العمل</label>
                      <textarea name="description" wire:model='userAdd.description' class="form-control description-area" id="exampleFormControlTextarea1" rows="6" placeholder="وصف العمل الذي تريدة (أختياري)" required="" style="height: 140px;">{{ Auth::user()->description }}</textarea>
                  </div>
              </div>
              </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  wire:click='userAdd()'>Save</button>
            </div>
        </div>
    </div>
</div>

 <!-- Modal Edit User -->
<div wire:ignore.self class="modal " id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class=" modal-dialog modal-fullscreen  " role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title"> تعديل المستخدم</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body text-start">

              <form class="row g-2 needs-validation" novalidate>

                  <div class="col-md-4 mb-2">
                      <div class="form-group">
                          <label> الاسم</label>
                          <input name="name" type="text" wire:model='name' class="form-control " placeholder="ادخل الاسم"  >
                      </div>
                  </div>

                  <div class="col-md-4 mb-2">
                      <div class="form-group">
                          <label>بريدك الاليكتروني</label>
                          <input name="email" type="email" wire:model="email" class="form-control " placeholder="سجل بريدك اورقم جوالك">
                      </div>
                  </div>

                  <div class="col-md-4  mb-2">
                      <div class="form-group">
                          <label> رقم التلفون </label>
                          <input name="numphone" wire:model='phone' type="number" class="form-control " placeholder="سجل بريدك اورقم جوالك" >
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                          <label>  الحساب</label>
                          <select name="departement_id" wire:model='is_admin' class=" form-select form-control">
                              <option value="0" > عادي </option>
                              <option value="1" > ادمن </option>
                          </select>
                      </div>
                    </div>

                  <div class="col-md-4">
                      <div class="form-group">
                          <label> نوع الحساب</label>
                          <select name="departement_id" wire:model='user_type' class=" form-select form-control">
                              <option value="0" > لايوجد</option>
                              <option value="1" > عامل </option>
                              <option value="2" > صاحب اعمال</option>
                              <option  value="3" > عامل , صاحب اعمال</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                          <label>المهنة </label>
                          <select name="departement_id" wire:model='departement_id' class=" form-select form-control">
                              <option value="" >  لايوجد</option>

                              @foreach($dep as $departemen)


                                  <option  value="{{ $departemen->id }}">{{ $departemen->name }}</option>


                              @endforeach
                          </select>
                      </div>
                    </div>





                <div class="col-md-8  p-0">
                  <livewire:counter />
                </div>



                <div class="col-md-12">
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">وصف العمل</label>
                      <textarea name="description" wire:model='description' class="form-control description-area" id="exampleFormControlTextarea1" rows="6" placeholder="وصف العمل الذي تريدة (أختياري)" required="" style="height: 140px;">{{ Auth::user()->description }}</textarea>
                  </div>
              </div>
              </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  wire:click='updateUser'>Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Show User -->
<div wire:ignore.self class="modal " id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class=" modal-dialog modal-fullscreen  " role="document">
        <div class="modal-content">
                <div class="modal-header shadow-sm">
                        <h5 class="modal-title"> تقرير المستخدم</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body text-start" style="background: #f6f9ff;">
                <div class="row" wire:model='userShow'>

                    <div class="col-12 col-lg-4  ">
                        <div class="card text-center ">
                          <img  src="{{ '/storage/images/'.$user1->image }}" alt="Title" class="mt-3 card-img-top rounded-circle m-auto " alt="..." style="width: 7rem; height: 7rem;">
                          <div class="card-body">
                            <h4 class="card-title"> {{ $user1->name }}</h4>
                             <div class="d-flex ">
                                <p class="w-50"><i class="bi bi-at"></i> {{ $user1->email }}</p>
                                <p class="w-50"><i class="bi bi-telephone-fill"></i> {{ $user1->phone }}</p>
                             </div>
                             <table class="table text-start">
                               <tbody>
                                 <tr>
                                   <th >نوع الحساب</th>
                                   <td>
                                        @if( $user1->user_type == 0)
                                        <span class="badge bg-danger">لم يحدد</span>
                                        @elseif($user1->user_type == 1)
                                            <span class="badge bg-warning text-dark"> عامل</span>
                                        @elseif($user1->user_type == 2)
                                            <span class="badge bg-primary ">صاحب أعمال</span>
                                        @else
                                        <span class="badge bg-primary ">صاحب أعمال</span>
                                        ,
                                        <span class="badge bg-warning text-dark">عامل</span>
                                        @endif
                                   </td>
                                 </tr>
                                 <tr>
                                    <th >المهنة</th>
                                    <td>
                                        @if($user1->departement )
                                        {{ $user1->departement->name }}
                                     @else
                                            {{ '-' }}
                                     @endif

                                    </td>
                                 </tr>
                                 <tr>
                                    <th >العنوان</th>
                                    <td>
                                        @if($user1->directorates )
                                            {{ $user1->directorates->province->name }}
                                            {{ '-' }}
                                            {{ $user1->directorates->name }}
                                        @else
                                                {{ '-' }}
                                        @endif

                                    </td>
                                 </tr>
                               </tbody>
                             </table>
                          </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4" >
                        <div class="card ">
                            <div class="card-header mt-3">معلومات اخرى</div>
                            <div class="card-body ">
                                <table class="table text-start">
                                    <tbody>
                                      <tr>
                                        <th >رقم المستخدم</th>
                                        <td>
                                            {{ $user1->id }}
                                        </td>
                                      </tr>
                                      <tr>
                                         <th >اسم المستخدم</th>
                                         <td>
                                            {{ $user1->username }}
                                         </td>
                                      </tr>
                                      <tr>
                                         <th >حالة الحساب</th>
                                         <td>

                                             @if( $user1->is_active == 1)
                                                <span class="badge bg-success">نشط</span>
                                             @else
                                                 <span class="badge bg-danger ">محظور</span>
                                             @endif
                                         </td>
                                      </tr>
                                      <tr>
                                        <th >تاريخ انشاء الحساب</th>
                                        <td>
                                           {{ $user1->created_at }}
                                        </td>
                                     </tr>
                                     <tr>
                                        <th >الاعمال</th>
                                        <td>
                                           {{ $user1->works->count() }}
                                        </td>
                                     </tr>
                                     <tr>
                                        <th >الاعمال المفتوحة</th>
                                        <td>
                                            {{ $user1->open_worke->count() }}
                                        </td>
                                     </tr>
                                     <tr>
                                        <th >العروض </th>
                                        <td>
                                            {{ $user1->offer->count() }}
                                        </td>
                                     </tr>
                                    </tbody>
                                  </table>
                            </div>

                          </div>
                    </div>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>

</div>
