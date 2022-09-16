<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\departement;
use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{

    public $username ;
    public $name ;
    public $email ;
    public $phone ;
    public $user_type ;
    public $password ;
    public $description ;
    public $departement_id;
    public $citys_id ;
    public $is_admin;


    public function showDataUser(){
      $user = User::where('username',$this->username)->first();

        $this->name           = $user->name;
        $this->email          = $user->email;
        $this->phone          = $user->phone;
        $this->user_type      = $user->user_type;
        // $this->password        = $user->password;
        $this->description    = $user->description;
        $this->departement_id = $user->departement_id;
        $this->citys_id       = $user->citys_id;
        $this->is_admin       = $user->is_admin;


    }

    public function render()
    {

        return view('livewire.dashboard.user-edit',['dep'=>departement::all()]);
    }
}
