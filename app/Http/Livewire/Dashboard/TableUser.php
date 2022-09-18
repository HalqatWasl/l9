<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Departement;
use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TableUser extends Component
{

    protected $paginationTheme = 'bootstrap';


    public $search;
    public $active;
    public $user_id;


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
    public $user;

    public $userShow;

    public  $userAdd;



    public function userAdd(){

        $data =$this->userAdd;


        try {

            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make('1223'),
                'username' => Str::random(10) . '-' .uniqid(),
                'user_type' => $data['user_type'],
                'departement_id' => $data['departement_id'],
                // 'citys_id' => $data['directorate_id'],
                'is_admin' => $data['is_admin'],
                'description' => $data['description'],
            ]);

            $this->userAdd = null;
            // User::create($this->userAdd);
            $this->dispatchBrowserEvent('msg1',['msg' => 'تم اضافة المستخدم']);
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('msg1',['msg' => 'لم يتم اضافة المستخدم يوجد خطا']);
        }


    }

    public function is_active1($id){


        $active =User::where('id',$id)->first();
            if( $active->is_active == 1 ){
                User::where('id',$id)->update(['is_active' => 0 ]);
            }
            else{
                User::where('id',$id)->update(['is_active' => 1 ]);
            }

    }
    use WithPagination;


    public function showDataUser($username){

        $user = User::where('username',$username)->first();

        $this->userShow= $user;
        $this->user=$user;

          $this->name           = $user->name;
          $this->email          = $user->email;
          $this->username       = $user->username;
          $this->phone          = $user->phone;
          $this->user_type      = $user->user_type;
          // $this->password        = $user->password;
          $this->description    = $user->description;
          $this->departement_id = $user->departement_id;
          $this->citys_id       = $user->citys_id;
          $this->is_admin       = $user->is_admin;

        $this->emit('userShow');

      }

    public function updateUser(){

        User::where('username',$this->username)
        ->update(
                 ['name'            => $this->name,
                  'email'           => $this->email,
                  'phone'           => $this->phone,
                  'user_type'       => $this->user_type,
                  'description'     => $this->description,
                  'departement_id'  => $this->departement_id,
                  'citys_id'        => $this->citys_id,
                  'is_admin'        => $this->is_admin,

        ]);
        $this->dispatchBrowserEvent('msg1',['msg' => 'تم  التعديل']);
    }

    public function render()
    {


        $search ='%'.$this->search.'%';
        $this->user=$this->userShow;

        $this->emit('userShow');
        return view('livewire.dashboard.table-user',
                  ['users' => User::where('name','LIKE',$search)->paginate(10),
                   'dep'=> Departement::all(),
                   'user1'=>  User::where('username','LIKE',$this->username)->first()
                  ]);
    }
}
