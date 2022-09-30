@extends('layouts.app')


@section('content')


<div class="container mt-5">
    <div class="row justify-content-center vh-100 align-items-stretch ">
    <div  style="width: 30rem;" >
      <h1 class="pb-5">حلقة وصل</h1>
      <h4 class="p-2">تسجيل الدخول</h4>

      <div class="shadow-sm p-2 border  rounded-2 bg-white">
      <form method="POST" action="{{ route('login') }}">

         @csrf

          <div class="form-floating mb-2">
            <input   id="email" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus id="floatingInput" placeholder="">
            <label for="floatingInput">البريد الالكتروني</label>

            @error('email')
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



          <div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}">
              <label class="form-check-label" for="invalidCheck3">
               حفظ الحساب
              </label>
              <!-- <div class="invalid-feedback">
                تجب الموافقة قبل إرسال النموذج.
              </div> -->
            </div>
          </div>

          <div >
            <button class="btn btn-primary m-2" type="submit">تسجيل</button>

            @if (Route::has('password.request'))
                 <a class="btn btn-link" href="{{ route('password.request') }}">
                 هل نسيت كلمة المرور ؟
                 </a>
             @endif


          </div>

        </form>
        </div>
      </div>
    </div>
</div>
@endsection
