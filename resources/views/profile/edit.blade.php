

@if(Auth::user()->image)



@endif
<h3>تعديل الصورة الشخصية</h3>
<div class="row">
    <div class="col-md-12">
        <form class="basic-info" action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="profile-thumb">
                        @if(Auth::user()->image)

                        <img id="profile-photo" src="{{ '/storage/images/'.Auth::user()->image }}" class="card-img-top rounded-circle m-auto " alt="..." style="width: 10rem; height: 10rem;">

                    @endif
                    </div>
                </div>

                <div class="col-md-12 px-4 pt-3">


                    <input id="f-profile-photo" name="image" type="file"  class="form-control d-none"   accept="image/*" multiple >

                    <button id="p" class="btn btn-primary " onclick="document.getElementById('f-profile-photo').click();" type="button">تعديل</button>
                    <button class="btn btn-primary m-1 " type="submit">حفظ</button>

                </div>
            </div>
        </form>

        <h3>المعلومات الاساسية للحساب </h3>
        <form action="{{ route('profile.update') }}" method="POST" class="basic-info">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>اسمك</label>
                        <input name="name" type="text" class="form-control" placeholder="اكتب اسمك هنا" required=""  value="{{ Auth::user()->name }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>بريدك الاليكتروني</label>
                        <input name="email" type="email" class="form-control text-start" placeholder="سجل بريدك اورقم جوالك" value="{{ Auth::user()->email }} " disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>رقم التلفون</label>
                        <input name="phone" type="number"  class="form-control text-start "  placeholder="اكتب رقم جوالك" value="{{ (int)Auth::user()->phone }}">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label>نوع الحساب</label>
                        <select name="user_type" class=" form-select form-control">

                            <option  {{ (Auth::user()->user_type == null ? 'selected': '') }}  > لايوجد </option>
                            <option  {{ (Auth::user()->user_type == 1 ? 'selected' : '') }} value="1">عامل</option>
                            <option  {{ (Auth::user()->user_type == 2 ?  'selected': ' ') }} value="2">صاحب اعمال</option>
                            <option  {{ (Auth::user()->user_type == 3 ? 'selected': '') }} value="3">عامل و صاحب اعمال</option>

                        </select>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label>التصنيفات</label>
                        <select name="departement_id" class=" form-select form-control">
                            <option value="" >  لايوجد</option>

                            @foreach($dep as $departemen)

                            @if(Auth::user()->departement_id == $departemen->id)
                                <option selected value="{{ $departemen->id }}">{{ $departemen->name }}</option>
                            @else
                                <option  value="{{ $departemen->id }}">{{ $departemen->name }}</option>
                            @endif

                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الوصف </label>
                        <textarea name="description" class="form-control description-area" id="exampleFormControlTextarea1" rows="6" placeholder="وصف العمل الذي تريدة (أختياري)" required="" style="height: 140px;">{{ Auth::user()->description }}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="account-btn">حفظ</button>
                </div>
            </div>
        </form>

        <h3>المنطقة </h3>
        <form action="{{ route('profile.updateCitys') }}" method="POST" class="candidate-address">
            @csrf
            <livewire:counter />

            <button type="submit" class="account-btn mt-3">حفظ</button>
            
        </form>


    </div>
</div>



<script>

    var f_profile_photo=document.getElementById('f-profile-photo');
    var profile_photo=document.getElementById('profile-photo');

      f_profile_photo.onchange=function(){
        const [file] =f_profile_photo.files
        if(file){
          profile_photo.src=URL.createObjectURL(file)
        }
      }

</script>


