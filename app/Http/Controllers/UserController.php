<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\User;
use App\Models\Work;
use App\Models\Evaluation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{

     /**
     * Store a newly created user
     *
     * @param User $user
     * @param StoreUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request)
    {


        $user=User::where('username',$request->username)->first();

        if($user==null){
            return "ud";
        }

        $eval=Evaluation::all()->where('user_id',$user->id);
        $eval_sum=Evaluation::all()->where('user_id',$user->id)->sum('evaluation');
        $eval_count=Evaluation::all()->where('user_id',$user->id)->count('evaluation');





       return view('user.index', [
           'user'         =>$user,
           'eval'         =>$eval,
          'eval_sum'     =>$eval_sum,
           'eval_count'   =>$eval_count
        ]);


    }

    public function store(array $data){


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'username' => Str::random(10) . '-' .uniqid(),
            'user_type' => $data['user_type'],
            'departement_id' => $data['departement_id'],
            'citys_id' => $data['directorate_id'],
            'is_admin' => $data['is_admin'],
            'description' => $data['description'],
        ]);


    }


}
