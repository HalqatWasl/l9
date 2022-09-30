<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileontroller extends Controller
{
    //
    //define('MB',1048576);
    function updateinfo(Request $request)
    {

        /*$attrs = $request->validate([
            'name' => 'required|string',
            'user_type' => 'required',
            'departement_id' => 'required',
            'citys_id' => 'required',
            'description' => 'required'
        ]);*/

        Auth()->user()->update([

        'name'           => $request->name  ,
        'user_type'      => $request->user_type,
        'departement_id' => $request->departement_id ,
        'citys_id'       => $request->citys_id ,
        'description'    => $request->description
        ]);

        return response([
            'message' => "updated info "

        ], 200);


    }

    function updateimage(Request $request) {

        if($request->hasFile('image')){
            $filename=$request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
             Auth()->user()->update(['image'=>$filename]);

        }
        return response([
            'message' => "updated pic "

        ], 200);


/*
        $user =new User();
        $user->user_id = auth()->id();
        $user->name = 1;
        $user->password = $request->password;
        $user->description = $request->description;
        $user->images =json_encode($imageFile);
        $user->dep_types =;
        $user->is_active = 1;
        $user->save();*/



        /*$image_name =$_FILES[$request]['name'];
        $imafe_tmp  =$_FILES[$request]['tmp_name'];
        $image_size =$_FILES[$request]['size'];
        $allowExt  = array('jpg','png','gof');
        $strTOArry =explode('.',$image_name);
        $ext =end($strTOArry);
        ext  =strtolower($ext);
        if(!empty($image_name) && !in_array ($ext ,$allowExt)){
            $misError[] ="الصيغه غير مدعومه"
        }
        if($image_size > 2*MB){
            $misError[] =" zise "
        }
        if(empty($misError)){
        move_uploaded_file($imafe_tmp,)
        }
        else{
            respon
        }*/


    }






}
