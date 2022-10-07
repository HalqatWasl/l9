<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;


class LikeController extends Controller
{
    public function index()
    {

    }

    public function like(Request $request){

        $work_id = $request->work_id;
        $user_id = $request->user_id;

       
        $work =Work::where('id',$work_id)->first();

        if ($user_id) {

            $like =Like::where('work_id',$work_id)->where('user_id',$user_id)->first();

            if(!$like){

                // $detaile =[
                //     'title'=> 'اعجاب جديد',
                //     'icon'=> 'bi-heart text-danger',
                //     'body'=> 'أعجبه بأحد اعمالك',
                //     'user'=> $user->name ,
                //     'username'=>  Auth::user()->username,
                // ];
                // if ($user->id != $work->user->id ) {
                //     $work->user->notify(new \App\Notifications\InvoicePaid($detaile));
                // }

                Like::create(['user_id'=>$user_id,'work_id'=>$work_id,'like'=>1]);

                return response([
                    'status'=>  'success'
                   ], 200);

            }
            else{

                Like::where('work_id','=',$work_id)->where('user_id',$user_id)->delete();

                return response([
                    'status'=>  'success'
                   ], 200);
            }
        }

    }
}
