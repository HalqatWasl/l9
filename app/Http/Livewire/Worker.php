<?php

namespace App\Http\Livewire;

use App\Models\Departement;
use App\Models\Directorate;
use App\Models\Province;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Worker extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $select1 ="";

    public $departement_id ='' ;
    public $province_id ;
    public $directorate_id ='';

    public $provinces;
    public $directorates =null;
    public $departements;

    public $provinceID;
    public $directorateID ;
    public $departemenID;

    private $filter=false;



    public function sel()
    {
      $this->directorates =Directorate::all()->where('province_id',$this->select1);
    }

    public function filter (){

        $this->filter=true;
    }





    public function render()
    {

        if( $this->filter == false){

            $this->provinces     =  Province::all();
            $this->directorates  =  Directorate::all()->where('province_id',$this->select1);
            $this->departements  =  Departement::all();

            // return view('livewire.worker',['users'=> User::paginate(10)]);
            return view('livewire.worker',['users'=> User::where('departement_id','LIKE',"%{$this->departement_id}%")
                                                         ->where('citys_id','LIKE',"%{$this->directorate_id}%")
                                                         ->where('is_active',1)
                                                         ->paginate(10)
                                                        ]);
        }else{

            $this->filter = false;
            return view('livewire.worker',['users'=> User::where('departement_id','LIKE',"%{$this->departemenID}%")
                                                     ->where('citys_id','LIKE',"%{$this->directorateID}%")
                                                     ->where('is_active',1)
                                                     ->paginate(10)
                                                    ]);

        }




    }
}
