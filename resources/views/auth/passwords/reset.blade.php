@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">

<div  style="width: 30rem;">
<h2 class="p-2">تغيير كلمة المرور</h2>

<div class="shadow-sm p-2 border  rounded-2 bg-white">
<form method="POST" action="{{ route('password.update') }}">

@csrf

<input type="hidden" name="token" value="{{ $token }}">

<div class="form-floating mb-2">
<input type="email"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus required autocomplete="email" autofocus id="floatingInput" placeholder="name@example.com">
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
       الموافق على سياية استخدم التطبيق
  </label>
  <!-- <div class="invalid-feedback">
    تجب الموافقة قبل إرسال النموذج.
  </div> -->
</div>
</div>

<div >
<button class="btn btn-primary m-2" type="submit">تغيير</button>

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
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
