<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Open_work;
use App\Models\Departement;


class OpenWorkController extends Controller
{
    //to show openWork

    public function index(){
       
  $openwork=Open_work::all()->where('stage','=',1);

 
return response(['Openwork'=>$openwork],200);
}






//to add openWork
     public function save(Request $request){

     
             Open_work::create([
                 'user_id'        => $request->user_id,
                 'departement_id' => $request->departement_id,
                 'province_id'    => $request->province_id,
                 'directorate_id' => $request->directorate_id,
                 'title'          => $request->title,
                 'description'    => $request->description,
                 'num_day'        => $request->num_day,
                 'pric'           => $request->pric,
                 'address'        => $request->address,
                 'stage'          => $request->stage,
                 'is_active'      => 1,
    
             ]);
             return response([
                'status'=>  'success'
               ], 200);
           
               // return response('success'=>'تم اضافة العمل الى  معرض الاعمال');
            
        }
    
}
