<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Work;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class WorkController extends Controller
{
    //

    public function index(){

        $works=DB::table('works')->
                     join('users','users.id', '=','works.user_id')
                    ->join('likes','likes.work_id','works.id')
                    ->select('works.*', 'likes.work_id',DB::raw('COUNT(likes.like) as count'))
                    ->groupBy('likes.work_id')
                    ->get();
        return response(['data'=> $works],200);

    }

    
    public function saveWork(Request $request){


        if($request->hasFile('imageFile')){

         foreach($request->file('imageFile') as $image){

                $filename=rand(1000,1000000).$image->getClientOriginalName();
                $image->storeAs('imagesWorks',$filename,'public');
                $imageFile[] =$filename;
            }




        }

        $work =new Work();
        $work->user_id =  $request->user_id;
        $work->dep_id = $request->departement_id;
        $work->titel = $request->title;
        $work->description = $request->description;
        $work->images =json_encode($imageFile);
        $work->dep_types =$request->dep_types;
        $work->is_active = 1;
        $work->save();

        /*  Work::create([
            'user_id'     => $request->user_id,
            'dep_id'      => $request->departement_id,
             'titel'       => $request->title,
            'description' => $request->description,
           //  'images'      => json_encode($imageFile),
            'dep_types'   => $request->dep_types,
            'is_active'   => 1,

         ]);*/

        return response([
            'status'=>  'success'
           ], 200);
     }

     public function showWorks(Request $request ){
   // $work=Work::all()->where('dep_id','LIKE',$request->dep_id);
     $works=DB::table('works')->where('dep_id','LIKE',$request->dep_id)->join('users','works.user_id', '=','users.id')->get();
     return response(['data'=> $works],200);

     }
}
