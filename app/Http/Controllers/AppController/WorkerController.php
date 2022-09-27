<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Worker extends Controller
{
    //
    public function index()
    {


       

        $departements=departement::all();
        $directorate_id ='';
        $users= User::all()->where('departement_id','LIKE','1');
        // $users=DB::table('evaluations')->join('users','evaluations.user_id','=','users.id')->sum('evaluation');
        //  $users =  Evaluation::select('user_id',DB::raw("SUM(evaluation) as total, COUNT(evaluation) as count"))->groupBy('user_id')->orderBy('total','DESC')->get();
        //  return $users;
        $evaluation=$users;
        $departement_id = '';
        return  response(['departements'=> $departements,'directorate_id'=>$directorate_id,'departement_id'=>$departement_id],200);
        
    }
}
