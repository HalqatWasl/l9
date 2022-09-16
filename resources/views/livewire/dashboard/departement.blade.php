<div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" style="position: relative; overflow: hidden;">
     <div class="dataTable-top">
        <div class="dataTable-dropdown">
            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modelId">
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
                           اسم المهنه
                        </th>

                        <th  class="text-center "  data-sortable="" >
                         تعديل
                        </th>
                    </tr>
                </thead>
                <tbody class="text-start">

                    @foreach($departements as $departement)
                        <tr class="text-center">
                            <th scope="col" class="text-center"  >{{ $departement->id }}</th>
                            <td class="text-centers"> {{ $departement->name }}</td>

                            <td class="text-center">
                              {{-- <!-- <livewire:dashboard.departement-edit :departementname="$departement->departementname"/> --> --}}


                              <button type="button" class=" btn btn-primary  " wire:click="showDatadepartement('{{ $departement->id }}')"   data-bs-toggle="modal" data-bs-target="#modelId1">
                                        تـعـديـل
                                        <span class="bi bi-pencil-square"></span>
                                     </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
               </table>

    </div>
                {{ $departements->links() }}


 <!-- Modal Edit departement -->
<div wire:ignore.self class="modal " id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class=" modal-dialog modal-md  " role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title"> تعديل </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body text-start">

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




              <form class="row g-2 needs-validation" novalidate>

                  <div class="col-12">
                      <div class="form-group">
                          <label> اسم المهنة</label>
                          <input name="nameDepartement" type="text" wire:model='nameDepartement' class="form-control mt-2" placeholder="ادخل الاسم"  >
                      </div>
                  </div>

              </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
                <button type="button" class="btn btn-primary"  wire:click='update'>حفظ</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal new departement -->
<div wire:ignore.self class="modal " id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class=" modal-dialog modal-md  " role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title"> اضافة  </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body text-start">

              <form class="row g-2 needs-validation" novalidate>
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

                  <div class="col-12">
                      <div class="form-group">
                          <label> اسم المهنة</label>
                          <input name="addname" type="text" wire:model='addname' class="form-control mt-2" placeholder="ادخل الاسم"  >
                      </div>
                  </div>

              </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
                <button type="button" class="btn btn-primary"  wire:click='createdepartement'>حفظ</button>
            </div>
        </div>
    </div>

</div>




</div>
