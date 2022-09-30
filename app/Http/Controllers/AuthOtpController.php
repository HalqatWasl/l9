<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\VerificationCode;
use App\Models\VerifiecationCode;
use DateTime;
use Illuminate\Support\Facades\Auth;

class AuthOtpController extends Controller
{

    public function index()
    {
        $code = null;

        $verificationCode = VerifiecationCode::where('user_id', auth()->user()->id)->latest()->first();

        $d = Carbon::create(auth()->user()->created_at)->diffInSeconds(Carbon::now());
        if ($d < 20) {

            $verificationCode = $this->generateOtp();
        }
        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            $code =$verificationCode['otp'];


        }





        # Generate An OTP
        // if ( $now == auth()->user()->created_at ) {
        //     $verificationCode = $this->generateOtp();
        // }



        return view('auth.verification',compact('code'));
        // return redirect()->route('verification')->with('success',  $message);
        // if($verificationCode && $now->isBefore($verificationCode->expire_at)){
        //     $code =$verificationCode['otp'];

        //     return view('auth.verification',compact('code'));
        // }
    }



    // Generate OTP


    public function createCode(){


       $conut = VerifiecationCode::where('user_id',auth()->user()->id)->whereDate('created_at',Carbon::now())->count();

       if ($conut >= 3) {
           return redirect()->route('verification')->with('error', 'لايمكنك انشاء كود حاول بعد 24 ساعة');
       }
       $this->generateOtp();

        return redirect()->route('verification');
    }

    public function generateOtp()
    {

        # User Does not Have Any Existing OTP
        $verificationCode = VerifiecationCode::where('user_id', auth()->user()->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        // Create a New OTP
        return VerifiecationCode::create([
            'user_id' => auth()->user()->id,
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(10)
        ]);
    }

    // public function verification($user_id)
    // {
    //     return view('auth.otp-verification')->with([
    //         'user_id' => $user_id
    //     ]);
    // }

    protected function validator(array $data)
    {
    }

    public function loginWithOtp(Request $request)
    {
        #Validation
        $request->validate([
            'otp' => 'required','numeric',
        ]);

        #Validation Logic
        $verificationCode   = VerifiecationCode::where('user_id', auth()->user()->id)->where('otp', $request->otp)->latest()->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            VerifiecationCode::where('user_id', auth()->user()->id)->latest()->first()->update([
                'expire_at' => Carbon::now()->subMinutes(10)
            ]);
            return redirect()->back()->with('error', 'كود التحقق غير صحيح');

        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return redirect()->back()->with('error', 'الكود غير صالح');
        }

        $user = User::whereId(auth()->user()->id)->first();

        if($user){
            // Expire The OTP
            $verificationCode->update([
                'expire_at' => Carbon::now()
            ]);

            Auth()->user()->update(['email_verified_at'=>Carbon::now()]);

            return redirect('/home');
        }

        return redirect()->route('verification')->with('error', 'كود التحقق غير صحيح');
    }
}
