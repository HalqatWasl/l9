<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\departement;
use App\Models\Directorate;
use App\Models\Open_work;
use App\Models\Province;
use Livewire\Component;
use Livewire\WithPagination;


class OpenWorks extends Component
{
    public $provinces;
    public $directorates =null;
    public $departements;

    public $provinceID;
    public $directorateID ;
    public $departemenID;
    public $stage;

    public $select1;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function sel()
    {
      $this->directorates =Directorate::all()->where('province_id',$this->select1);
    }

    public function render()
    {

        $this->provinces     =  Province::all();
        $this->directorates  =  Directorate::all()->where('province_id','LIKE',$this->select1);
        $this->departements  =  Departement::all();

        return view('livewire.dashboard.open-works',
                    ['open_works' => Open_work::where('province_id','LIKE',"%{$this->select1}%")
                                              ->where('directorate_id','LIKE',"%{$this->directorateID}%")
                                              ->where('departement_id','LIKE',"%{$this->departemenID}%")
                                              ->where('stage','LIKE',"%{$this->stage}%")
                                              -> paginate(3)]);
    }
}
