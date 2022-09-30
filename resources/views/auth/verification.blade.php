@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100">
        <div class="row justify-content-center align-items-center">

            <div  style="width: 30rem;">
                    <h2 class="p-2">التحقق من الحساب</h2>
                    @if($code)

                         <div class="alert alert-success" role="alert">
                            {{ $code }}
                        </div>
                    @else

                    @endif
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

             <div class="shadow-sm p-2 border  rounded-2 bg-white">
                <form method="POST" action="{{ route('verification.loginWithOtp') }}">

                    @csrf



                    <div class="form-floating mb-2">
                        <input type="text"  id="otp" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">كود التحقق</label>

                        @error('otp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>


          <div >
            <button class="btn btn-primary m-2" type="submit">
               تأكيد
            </button>

            @if(!$code)
            <div>
              <a href="{{ route('createCode') }}">اعادة ارسال الكود</a>
          </div>
            @endif

          </div>



        </form>
        </div>
      </div>
    </div>

    </div>
</div>

@endsection
