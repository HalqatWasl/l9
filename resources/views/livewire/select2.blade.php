<div class="row m-0 p-0"  >

    <div class="col-12 ">
        <div class=" mb-6">
            <label>المحافظة</label>
            <select name="province_id"   wire:change='sel'  wire:model="select1" class=" form-select  " aria-label=".form-select-lg مثال" style="height: 50px">

              @foreach($provinces as $province)
                <option value="{{ $province->id }}" {{ ($province_id == $province->id  ?  'selected': '') }}> {{ $province->name }}</option>
                @endforeach

            </select>
        </div>
    </div>


    <div class="col-12 ">
        <div class=" mb-6">
            <label>المديرية</label>
            <select   name="directorate_id"  class=" form-select    " aria-label=".form-select-lg مثال" style="height: 50px">

            @if($directorates)
                @foreach($directorates as $directorate)
                <option  value="{{ $directorate->id }}" {{ ($directorate_id == $directorate->id  ?  'selected': '') }}> {{ $directorate->name }}</option>
                @endforeach
                @endif

            </select>
        </div>
    </div>


    <!-- <div class="col-md-12">
        <button type="submit" class="account-btn">تعد يل</button>
        <button type="submit" class="account-btn">حفظ</button>
    </div> -->
</div>


