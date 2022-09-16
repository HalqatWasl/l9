
@extends('layouts.app')



@section('content')
@include('layouts.navbar')

<div class="container mt-5 py-5">

    <div class="card  m-0 p-3  " style="width: 100%;">
      <h5>اضافة الاعمال السابقة </h5>
    </div>



        <div class="row p-1 pt-2 g-2">




            <div class="col-12 col-md-8 card ">

            <form action=" {{ route('work.store') }} " method="POST" enctype="multipart/form-data" >

                @csrf
              <div class="card-body">
                   <div class="form-floating mb-2  ">
                       <input name="title" type="text" required="required"  class="form-control" id="floatingInput" placeholder="name@example.com">
                       <label for="floatingInput">العنوان</label>
                   </div>

                   <div class="form-floating mb-2">
                      <textarea name="description" class="form-control " required="required" id="floatingtextarea" placeholder="س" style="height: 300px;"></textarea>
                      <label for="floatingtextarea">الوصف</label>
                  </div>



                  <div id="word-photo" class=" ">

                      <!-- <div id="profile-photo1" class="position-relative" style="width: 10rem; height: 10rem;">
                         <img id="" src="../img/11 (2).jpg" class="card-img-top  m-auto " alt="..." style="width: 10rem; height: 10rem;">
                          <span class="position-absolute top-0 m-0 text-white end-0 fs-3 bi bi-x" onclick="document.getElementById('profile-photo1').remove()"></span>
                      </div> -->

                  </div>
                <div class="mb-2">
                    <input id="f-profile-photo" name="imageFile[]"  required="required" type="file" class="form-control d-none" accept="image/*" multiple>

                    <button class="btn btn-primary m-2" onclick="document.getElementById('f-profile-photo').click();" type="button">اضافة الصور <i class="bi bi-images  p-0 m-0"></i></button>

             </div>


                <div class="form-floating mb-2">
                    <select name="dep_id" placeholder="Select Categories"  required="required" class="form-select form-select-sm" id="floatingSelect">

                            <option ></option>
                        @foreach($departements as $departement)

                        <option value="{{ $departement->id }}">{{ $departement->name }}</option>

                        @endforeach

                    </select>
                    <label for="floatingSelect">المهنة</label>
                </div>




              </div>
             <div class="card-footer bg-white border-0 p-3">
                <button class="btn btn-primary " type="submit">حفظ</button>
            </div>



     </form>

  </div>





        </div>

        </div>




</div>



<script>


function previewImage(){

   var wordPhoto = document.querySelector('#word-photo');

   if(this.files){
     [].forEach.call(this.files, readAndPreview);
   }

   function readAndPreview(file){

     var reader = new FileReader();

     reader.addEventListener("load", function(){
       var image = new Image();
       image.height = 100;
       image.classList ='[]'
       image.title  = file.name;
       image.src    = this.result;
       wordPhoto.appendChild(image);
     });

     reader.readAsDataURL(file);

   }

 }

document.querySelector('#f-profile-photo').addEventListener('change',previewImage);
</script>



@endsection


