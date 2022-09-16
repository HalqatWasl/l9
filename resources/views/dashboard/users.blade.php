@extends('dashboard.app')

@section('content')



    <div class="pagetitle mt-5 pt-4 mx-4">
      <h1>المستخدمين</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
          <li class="breadcrumb-item active">المستخدمين</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section    mx-2">
      <div class="row">





        <div class="col-lg-12 col-12">

          <div class="card w-100">
            <div class="card-body">

              {{-- <h5 class="card-title">Datatables</h5> --}}



             <livewire:dashboard.table-user />
          </div>

        </div>

      </div>

      <!-- Button trigger modal -->

      <!-- Modal -->
      <div class="modal " id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class=" modal-dialog modal-fullscreen show " role="document">
              <div class="modal-content">
                      <div class="modal-header">
                              <h5 class="modal-title">اضافة مستخدم</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                  <div class="modal-body">

                    <form class="row g-2 needs-validation" novalidate>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label> الاسم</label>
                                <input name="email" type="text" class="form-control " placeholder="سجل بريدك اورقم جوالك"  >
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label>بريدك الاليكتروني</label>
                                <input name="email" type="email" class="form-control " placeholder="سجل بريدك اورقم جوالك">
                            </div>
                        </div>

                        <div class="col-md-4  mb-2">
                            <div class="form-group">
                                <label> رقم التلفون </label>
                                <input name="ىع" type="number" class="form-control " placeholder="سجل بريدك اورقم جوالك" >
                            </div>
                        </div>

                      <div class="col-md-8  p-0">
                        <livewire:counter />
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>المهنة </label>
                            <select name="departement_id" class=" form-select form-control">
                                <option value="" >  لايوجد</option>

                                {{-- @foreach($dep as $departemen)

                                @if(Auth::user()->departement_id == $departemen->id)
                                    <option selected value="{{ $departemen->id }}">{{ $departemen->name }}</option>
                                @else
                                    <option  value="{{ $departemen->id }}">{{ $departemen->name }}</option>
                                @endif

                                @endforeach --}}
                            </select>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">وصف العمل</label>
                            <textarea name="description" class="form-control description-area" id="exampleFormControlTextarea1" rows="6" placeholder="وصف العمل الذي تريدة (أختياري)" required="" style="height: 140px;">{{ Auth::user()->description }}</textarea>
                        </div>
                    </div>
                    </form>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" wire:click='updateUser' >Save</button>
                  </div>
              </div>
          </div>
      </div>



    </section>



@endsection
