
@extends('layouts.app')



@section('content')
@include('layouts.navbar')




<div class="job-post ptb-100 card">

            <div class="container">
                <form action=" {{ route('openwork.store') }} " method="POST" class="job-post-from">
                    @csrf
                    <h2>قم بتعبئة البيانات المطلوبة </h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>عنوان العمل المطلوب </label>
                                <input type="text" name="title" class="form-control" id="exampleInput1" placeholder="مثال : تبليط عمارة في صنعاء مكونة من 3 غرف وحمام ومطبخ" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>التصنيفات</label>
                                <select name="departement_id" class="form-select form-control" >
                                    @foreach($departements as $departement)
                                    <option value="{{ $departement->id }}"> {{ $departement->name }}</option>
                                    @endforeach
                                    <option value="1">سباكين</option>
                                    <option value="2">حدادين</option>
                                    <option value="4">نجارين</option>
                                    <option value="5">مليسين</option>
                                    <option value="6">بنائين</option>
                                </select>
                            </div>
                        </div>
                        @livewireStyles
                        <livewire:counter>
                        @livewireScripts

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>الموقع</label>
                                <input type="text" name="address" class="form-control" id="exampleInput5" placeholder="مثال : جولة عصر امام جامعة سبأ" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>الايام المطلوبة لاكمال العمل</label>
                                <input type="number" name="num_day" class="form-control text-start" id="exampleInput2" placeholder="مثال : 5" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>السعر</label>
                                <input type="number" name="pric" class="form-control text-start" id="exampleInput7" placeholder="مثال 5000 الف ريال يمني">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">وصف العمل</label>
                                <textarea name="description" class="form-control description-area" id="exampleFormControlTextarea1" rows="6" placeholder="وصف العمل الذي تريده اكتب عن تفاصيل العمل " required=""></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="post-btn">
                                اعلان عن عمل جديد
                            </button>
                        </div>
                    </div>
                </form>
            </div>

</div>




@endsection


