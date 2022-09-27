<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
class ProvincesController extends Controller
{
    //
    public function showProvince()
    {

        return response([
            'Province'=>  Province::all()
                       ], 200);
    }
}
