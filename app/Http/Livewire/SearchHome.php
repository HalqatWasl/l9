<?php

namespace App\Http\Livewire;

use App\Models\departement;
use App\Models\Directorate;
use App\Models\Province;
use Livewire\Component;

class SearchHome extends Component
{

    public $count = 0;

    public $select1 ="";
    public $msg="1";
    public $provinces;
    public $directorates =null;
    public $departements ;
    public $province_id=' ';
    public $directorate_id =' ';

    public function sel()
    {
      $this->directorates =Directorate::all()->where('province_id',$this->select1);
    }



    public function render()
    {
        $this->provinces = Province::all();
      $this->directorates =Directorate::all()->where('province_id',$this->select1);
      $this->departements=departement::all();

        return view('livewire.search-home');
    }
}
