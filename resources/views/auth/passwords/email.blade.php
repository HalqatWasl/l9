@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100">
        <div class="row justify-content-center align-items-center">

            <div  style="width: 30rem;">
                    <h2 class="p-2">نسيت كلمة المرور</h2>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

             <div class="shadow-sm p-2 border  rounded-2 bg-white">
                <form method="POST" action="{{ route('password.email') }}">

                    @csrf



                    <div class="form-floating mb-2">
                        <input type="email"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">البريد الالكتروني</label>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>


          <div >
            <button class="btn btn-primary m-2" type="submit">
                إرسال رابط إعادة تعيين كلمة المرور
            </button>
          </div>

        </form>
        </div>
      </div>
    </div>

    </div>
</div>

@endsection
