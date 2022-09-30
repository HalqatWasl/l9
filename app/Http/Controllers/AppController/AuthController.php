<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
//use Laravel\Passport\HasApiTokens;



class AuthController extends Controller
{
    //Register user
    public function register(Request $request)
    {
        //validate fields
        $attrs = $request->validate([
            'name'     => 'required|string',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        //create user
        $user = User::create([
            'name' => $attrs['name'],
            'email' => $attrs['email'],
            'password' =>Hash::make($attrs['password']),
            'username' => Str::random(10) . '-' .uniqid(),
        ]);

        //return user & token in response
        return response([
            'user' => $user,
            'token' => $user->createToken('secret')->plainTextToken,
            'message'=>'secsuss',
        ], 200);
    }
////////////////////////////////////////////////////////
    // login user
    public function login(Request $request)
    {
        //validate fields
        $attrs = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // attempt login
        if(!Auth::attempt($attrs))
        {
            return response([
                'message' => 'Invalid .'
            ], 403);
        }

        //return user & token in response
        return response([
            'user' => auth()->user(),
            'token' => auth()->user()->createToken('secret')->plainTextToken,
            'message'=>'valid',
        ], 200);
    }
//////////////////////////////////////////////////////////////
    // logout user
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response([
            'message' => 'Logout success.'
        ], 200);
    }

   //////////////////////////////////////////////////////////////////
    // get user details
    public function user()
    {
         return response([
             'user' => auth()->user(),
         ], 200);
    }

    ////////////////////////////////////////
    public function users()
    {

         return response([
          'users'=>  user::all()
         ], 200);
    }




}
