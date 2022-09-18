<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\departement as ModelsDepartement;
use Facade\Ignition\Support\LivewireComponentParser;
use Livewire\Component;
use Livewire\Livewire;
use Livewire\WithPagination;
class Departement extends Component
{

    protected $paginationTheme = 'bootstrap';


    public $search;
    public $active;



    public $idDepartement;
    public $nameDepartement ;
    public $addname;

    // public $msg;

    use WithPagination;



    public function showDatadepartement($id){

        $departement = ModelsDepartement::where('id',$id)->first();
        $this->idDepartement= $departement->id;
          $this->nameDepartement= $departement->name;

      }

    //   public function msg(){

    //   }

    public function createdepartement(){

        if($this->addname != null){

            $departement = new ModelsDepartement();

            $departement->name = $this->addname;
            $departement->is_active ='1';
            $departement->save();

            $this->addname = null;
        }

        session()->flash('success','تم اضافة مهنة جديدة بنجاح');

        $this->emit( 'msg');

    }

    public function update(){

        ModelsDepartement::where('id',$this->idDepartement)->update(['name' =>$this->nameDepartement]);
        session()->flash('success','تم التعديل المنهة  بنجاح');
        $this->emit('msg');


    }

    public function render()
    {
        $this->emit('msg');
        $search ='%'.$this->search.'%';

        return view('livewire.dashboard.departement' , ['departements' => ModelsDepartement::where('name','LIKE',$search)->paginate(10) ]);
    }
}
