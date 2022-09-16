<?php

namespace App\Http\Livewire;

use App\Models\Directorate;
use App\Models\Province;
use Livewire\Component;

class Select2 extends Component
{

    public $count = 0;

    public $select1 ="";
    public $msg="1";
    public $provinces;
    public $directorates =null;
    public $province_id=' ';
    public $directorate_id =' ';



    public function sel()
    {
      $this->directorates =Directorate::all()->where('province_id',$this->select1);
    }


    public function render()
    {
        $this->provinces = Province::all();
        // $this->select1=$this->province_id;
      $this->directorates =Directorate::all()->where('province_id',$this->select1);
    //   $this->msg=$this->select1=$this->province_id;

        return view('livewire.select2');
    }

}
