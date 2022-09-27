<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directorate;

class DirectoratesController extends Controller
{
    //
    public function showDirectorate()
    {

        return response([
            'Directorate'=>  Directorate::all()
                       ], 200);
    }
}
