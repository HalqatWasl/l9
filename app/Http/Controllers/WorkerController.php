<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Evaluation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{
    public function index()
    {


        if( auth()->check() && auth()->user()->is_admin == 1){

            return redirect('/dashboard');
        }

        $departements=Departement::all();
        $directorate_id ='';
        $users= User::all()->where('departement_id','LIKE','1');
        // $users=DB::table('evaluations')->join('users','evaluations.user_id','=','users.id')->sum('evaluation');
        //  $users =  Evaluation::select('user_id',DB::raw("SUM(evaluation) as total, COUNT(evaluation) as count"))->groupBy('user_id')->orderBy('total','DESC')->get();
        //  return $users;
        $evaluation=$users;
        $departement_id = '';
        return view('worker.index',compact('departements','directorate_id','departement_id'));
    }


    public function search(Request $request)
    {


        if( auth()->check() && auth()->user()->is_admin == 1){

            return redirect('/dashboard');
        }
        $departement_id = $request->departement_id;
        $province_id    = $request->province_id;
        $directorate_id = $request->directorate_id;
//   dd($departement_id);
        // $departements=departement::all();
        // $evaluation = Evaluation::all();
        $users= User::all()->where('departement_id','LIKE',$request->departement)->where('citys_id','LIKE',$request->directorate_id) ->take(23);
        // $users=DB::table('evaluations')->join('users','evaluations.user_id','=','users.id')->sum('evaluation');
        //  $users =  Evaluation::select('user_id',DB::raw("SUM(evaluation) as total, COUNT(evaluation) as count"))->groupBy('user_id')->orderBy('total','DESC')->get();
        //  return $users;
        $evaluation=$users;
        return view('worker.index',compact('users','departement_id','province_id','directorate_id'));
    }
}
