<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use App\Models\Directorate;
use App\Models\Province;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    //
    public function showDepartement()
    {

        return response([
            'departement'=>  Departement::all(),
           
            'province'    => Province::all()
           ], 200);

        /*$dep= Departement::all();
        return response()->json($dep);*/
    }


}
