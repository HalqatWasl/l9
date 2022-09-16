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
                           الاسم
                        </th>

                        <th  class="text-center "  data-sortable="" >
                         تعديل
                        </th>
                    </tr>
                </thead>
                <tbody class="text-start">

                    @foreach($provinces as $province)
                        <tr class="text-center">
                            <th scope="col" class="text-center"  >{{ $province->id }}</th>
                            <td class="text-centers"> {{ $province->name }}</td>

                            <td class="text-center">
                              {{-- <!-- <livewire:dashboard.province-edit :provincename="$province->provincename"/> --> --}}


                              <button type="button" class=" btn btn-primary  " wire:click="showDataprovince('{{ $province->id }}')"   data-bs-toggle="modal" data-bs-target="#modelId1">
                                        تـعـديـل
                                        <span class="bi bi-pencil-square"></span>
                                     </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
               </table>

    </div>
                {{ $provinces->links() }}


 <!-- Modal Edit province -->
<div wire:ignore.self class="modal " id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class=" modal-dialog modal-md  " role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title"> تعديل </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body text-start">

              <form class="row g-2 needs-validation" novalidate>

                  <div class="col-12">
                      <div class="form-group">
                          <label> اسم المحافظة</label>
                          <input name="name" type="text" wire:model='name' class="form-control mt-2" placeholder="ادخل الاسم"  >
                      </div>
                  </div>

              </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
                <button type="button" class="btn btn-primary"  wire:click='updateprovince'>حفظ</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal new province -->
<div wire:ignore.self class="modal " id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class=" modal-dialog modal-md  " role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title"> اضافة  </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body text-start">

              <form class="row g-2 needs-validation" novalidate>

                  <div class="col-12">
                      <div class="form-group">
                          <label> اسم المحافظة</label>
                          <input name="addname" type="text" wire:model='addname' class="form-control mt-2" placeholder="ادخل الاسم"  >
                      </div>
                  </div>

              </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
                <button type="button" class="btn btn-primary"  wire:click='createProvince'>حفظ</button>
            </div>
        </div>
    </div>
</div>

</div>
