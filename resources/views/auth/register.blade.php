@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100 align-items-center">

            <div  style="width: 30rem;">
      <h2 class="p-2">انشاء حساب</h2>

      <div class="shadow-sm p-2 border  rounded-2 bg-white">
      <form method="POST" action="{{ route('register') }}">

         @csrf

         <div class="form-floating mb-2">
            <input type="text"  id="name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">الاسم</label>

            @error('name')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
              </span>
           @enderror
         </div>

         <div class="form-floating mb-2">
            <input type="text"  id="phone"  class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus id="floatingInput" placeholder="77734567">
            <label for="floatingInput">رقم هاتفك</label>

            @error('phone')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
              </span>
           @enderror
         </div>

         <div class="form-floating mb-2">
            <input type="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="floatingPassword" placeholder="كلمة السر">
            <label for="floatingPassword">كلمة السر</label>

            @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
              </span>
           @enderror
         </div>

         <div class="form-floating mb-2">
            <input  id="password-confirm" type="password" class="form-control " name="password_confirmation" required  id="password-confirm"required autocomplete="new-password" placeholder="التحقق من كلمة السر">
            <label for="password-confirm">التحقق من كلمة السر</label>

            @error(' password-confirm')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
              </span>
           @enderror
         </div>



          <div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}">
              <label class="form-check-label" for="invalidCheck3">
                  الموافقة على شروط الاستخدام
              </label>
              <!-- <div class="invalid-feedback">
                تجب الموافقة قبل إرسال النموذج.
              </div> -->
            </div>
          </div>

          <div >
            <button class="btn btn-primary m-2" type="submit">انشاء</button>

            @if (Route::has('password.request'))
                 <a class="btn btn-link" href="{{ route('login') }}">
                 هل لديك حساب بالفعل ؟
                 </a>
             @endif


          </div>

        </form>
        </div>
      </div>
    </div>
</div>
@endsection
