<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Evaluation;
use App\Models\Province;
use App\Models\Directorate;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class HomepageController extends Controller
{
    //

    public function index()
    {

 $departements=Departement::all();
 $province = Province::all();
       // $users =  Evaluation::select('user_id',DB::raw("SUM(evaluation) as total, COUNT(evaluation) as count"))->groupBy('user_id')->orderBy('total','DESC')->get()->take(20) ;

     /*  $users=DB::table('evaluations')
        ->join('users','evaluations.user_id', '=','users.id')
        ->join('directorates','users.citys_id', '=','directorates.id  ')
        ->select('directorates.name','users.name','users.phone','evaluations.user_id',DB::raw("SUM(evaluations.evaluation) as total, COUNT(evaluations.evaluation) as count",))
        ->groupBy('evaluations.user_id')->orderBy('total','DESC')->get();
   */
  $users=DB::table('users')
       ->join('directorates','directorates.id', '=','users.citys_id')
       ->join('departements','departements.id', '=','users.departement_id')
       ->join('evaluations','evaluations.user_id', '=','users.id')
       ->join('provinces','provinces.id', '=','directorates.province_id')
        ->select('evaluations.user_id','users.name','users.phone','users.image',
        'departements.name as depName','directorates.name as dirName','provinces.name as proName',
        DB::raw("SUM(evaluations.evaluation) as total, COUNT(evaluations.evaluation) as count",))
        ->groupBy('evaluations.user_id')->orderBy('total','DESC');



        return response(['departemnts'=>$departements,'province'=>$province,
       'users'=>$users],200);


    }

   //to get the directory
   public function search(Request $request ){
       $id=$request->id;
       $directorates=Directorate::all()->where('province_id','LIKE',$id);
       return response(['directorates'=>$directorates],200);

   }


   public function resultOfSearch(Request $request){

    $departement_id = $request->departement_id;
    $province_id    = $request->province_id;
    $directorate_id = $request->directorate_id;

    $users=DB::table('users')
    ->join('directorates','directorates.id', '=','users.citys_id')
    ->join('departements','departements.id', '=','users.departement_id')
    ->join('evaluations','evaluations.user_id', '=','users.id')
    ->join('provinces','provinces.id', '=','directorates.province_id')
    ->where('departement_id','LIKE',$request->departement_id)
    ->where('citys_id','LIKE',$request->directorate_id)
     ->select('evaluations.user_id','users.name','users.phone','users.image',
     'departements.name as depName','directorates.name as dirName','provinces.name as proName',
     DB::raw("SUM(evaluations.evaluation) as total, COUNT(evaluations.evaluation) as count",))
     ->groupBy('evaluations.user_id')->orderBy('total','DESC')->get();


    //$users= User::all()->where('departement_id','LIKE',$request->departement_id)->where('citys_id','LIKE',$request->directorate_id) ->take(23);

    return response(['users'=>$users,'departement_id'=>$departement_id,'province_id'=>$province_id,'directorate_id'=>$directorate_id],200);

   }

}
