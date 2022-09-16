<div>

<button type="button" class="btn btn-primary " wire:click="showDataUser" data-bs-toggle="modal" data-bs-target="#modelId1">
                تعديل
</button>

   


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
                      <button type="button" class="btn btn-primary">Save</button>
                  </div>
              </div>
          </div>
</div>

</div>
