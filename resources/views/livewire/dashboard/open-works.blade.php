<div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" style="position: relative; overflow: hidden;">
    <div class="row mt-3">
        <div class="col-6 col-lg-3 ">
            <label>المحافظة</label>
            <select name="province_id"   wire:change='sel'  wire:model="select1" class=" form-select  " aria-label=".form-select-lg مثال" style="height: 50px">
                <option  value=""  class="text-secondary" >الكل </option>
              @foreach($provinces as $province)
                <option value="{{ $province->id }}" > {{ $province->name }}</option>
                @endforeach

            </select>
        </div>


        <div class="col-6 col-lg-3 ">
            <label>المديرية</label>

            <select    class=" form-select"   wire:model="directorateID"    aria-label=".form-select-lg مثال" style="height: 50px">
                   <option  value=""  class="text-secondary" >الكل </option>
                @if($directorates)
                    @foreach($directorates as $directorate)
                    <option   value="{{ $directorate->id }}" > {{ $directorate->name }}</option>
                    @endforeach
                @endif

            </select>
        </div>

        <div class="col-6 col-lg-3 ">
            <label>المهنة</label>
            <select name="departement"  wire:model="departemenID"  class="form-select  p-2" id="floatingSelect" aria-label="Floating label select example"  style="height: 50px" placeholder="Leave a comment here">
                <option value=""  class="text-secondary" >الكل </option>
                 @foreach($departements as $departement)
                      <option value="{{ $departement->id }}" >{{ $departement->name }} </option>
                 @endforeach


            </select>

        </div>

        <div class="col-6 col-lg-3 ">
            <label>الحالة</label>
            <select name="province_id"     wire:model="stage" class=" form-select  " aria-label=".form-select-lg مثال" style="height: 50px">
                <option  value=""  class="text-secondary" >الكل </option>
               <option  value="1"  class="text-secondary" >مفتوح</option>
               <option  value="2"  class="text-secondary" >ينفذ</option>
               <option  value="3"  class="text-secondary" >مكتمل</option>
            </select>
        </div>

     </div>
    <div class="dataTable-top">
        <div class="dataTable-dropdown">


          </div>



        {{-- <div class="dataTable-search">
            <input class="dataTable-input" wire:model="search" placeholder="Search..." type="text">
        </div> --}}
    </div>
    <div class="dataTable-container" style="position:static; width:auto; height: inherit; top: 0 ; bottom: 0; left: 100;" >
               <table class="table datatable dataTable-table table-sm  text-start" >
                <thead class="text-start">
                    <tr>
                        <th scope="col" class="text-center " >
                            #
                        </th>
                        <th scope="col " class="text-center " data-sortable="" >
                          صاحب العمل
                        </th>

                        <th  class="text-center "  data-sortable="" >
                           تاريخ النشر
                        </th>
                        <th  class="text-center "  data-sortable="" >
                           المنطقة
                        </th>
                        <th  class="text-center "  data-sortable="" >
                          المهنة المطلوبة
                        </th>
                        <th  class="text-center "  data-sortable="" >
                          السعر
                        </th>
                        <th  class="text-center "  data-sortable="" >
                          العروض
                        </th>
                        <th  class="text-center "  data-sortable="" >
                         الحالة
                        </th>
                        <th  class="text-center "  data-sortable="" >
                           _
                        </th>
                    </tr>
                </thead>
                <tbody class="text-start">

                    @foreach($open_works as $open_work)
                        <tr class="text-center">
                            <th scope="col" class="text-center"  >{{ $open_work->id }}</th>

                            <td class="text-centers">
                                <a href="{{ url('user', [$open_work->user->username]) }}" target="_blank" rel="noopener noreferrer">{{ $open_work->user->name }}</a>
                            </td>

                             <td class="text-centers">
                                @php
                                    $date=  Carbon\Carbon::parse($open_work->created_at)->locale('ar_AR');
                                    $date=  $date->diffForHumans();
                                @endphp
                                {{ $date }}
                            </td>

                            <td class="text-centers">
                                {{ $open_work->province->name }}
                                -
                                {{ $open_work->directorate->name }}
                            </td>
                            <td class="text-centers">
                                {{ $open_work->departement->name }}
                            </td>
                            <td class="text-centers">
                                {{ number_format($open_work->pric ,1)  }}
                                ر.ي
                            </td>
                            <td class="text-centers">
                                {{ number_format($open_work->offers->count() ,1)  }}
                            </td>
                            <td class="text-centers">
                             @if($open_work->stage==1)
                                <span class="badge bg-success">مفتوح</span>
                              @elseif($open_work->stage==2)
                                <span class="badge bg-warning">جاري التنفيذ</span>
                              @else
                                <span class="badge bg-danger">مكتمل</span>
                              @endif
                            </td>
                            <td class="text-centers">
                                <a href="{{ url('w', [$open_work->id]) }}" target="_blank" rel="noopener noreferrer">المزيد</a>
                            </td>


                              {{-- <button type="button" class=" btn btn-primary  " wire:click="showDataopen_work('{{ $open_work->id }}')"   data-bs-toggle="modal" data-bs-target="#modelId1">
                                        تـعـديـل
                                        <span class="bi bi-pencil-square"></span>
                                     </button> --}}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
               </table>

    </div>
                {{ $open_works->links() }}




</div>
