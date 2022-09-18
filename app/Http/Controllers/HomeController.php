<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Evaluation;
use App\Models\Province;
use App\Models\User;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if( auth()->check() && auth()->user()->is_admin == 1){

            return redirect('/dashboard');
        }

        $departements=Departement::all()->take(8);
        // $rovince=Province::all()->take(7);
        $evaluation = Evaluation::all();
        // $users=DB::table('evaluations')->join('users','evaluations.user_id','=','users.id')->sum('evaluation');
         $users =  Evaluation::select('user_id',DB::raw("SUM(evaluation) as total, COUNT(evaluation) as count"))->groupBy('user_id')->orderBy('total','DESC')->get()->take(20) ;
        //  dd($users);
        // $open_work
        $evaluation=$users;
        return view('home',compact('departements','evaluation','users'));
    }

    public function storep(Request $data){

        return Province::create([
            'name' => $data['name'],
            'is_active'=>'1',
        ]);
    }

    public function stored(Request $data){

        return Departement::create([
            'name' => $data['name'],
            'is_active'=>'1',
        ]);
    }

}
