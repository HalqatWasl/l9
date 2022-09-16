<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Directorate as ModelsDirectorate;
use App\Models\Province;
use Livewire\Component;
use Livewire\WithPagination;

class Directorate extends Component
{
    // protected $paginationTheme = 'bootstrap';


    public $search;
    public $active;



    public $EditId;
    public $nameDirectorate ;
    public $nameProvince;

    public $addname;
    public $addProvince;

    public $msgEdit;

    use WithPagination;



    public function showDatadirectorate($id){

        $directorate = Modelsdirectorate::where('id',$id)->first();
        $this->EditId= $directorate->id;
        $this->nameProvince= $directorate->province_id;
        $this->nameDirectorate= $directorate->name;

      }

    public function createdirectorate(){

        if($this->addname != null){

            $directorate = new ModelsDirectorate();

            $directorate->province_id = $this->addProvince;
            $directorate->name = $this->addname;
            $directorate->is_active ='1';
            $directorate->save();
            $this->dispatchBrowserEvent('msg1',['msg' => 'تم  الحفظ']);
            $this->addname = null;
        }

    }

    public function update(){

        ModelsDirectorate::where('id',$this->EditId)->update(['province_id'=>$this->nameProvince ,'name'=> $this->nameDirectorate]);

    //    $this->msgEdit ='تم حفظ التعديل بنجاح';

    //    return redirect()->back()->with('success','تم تغيير الصورة الشخصية بنجاح ');

    //    $this->emit('success','تم حفظ التعديل بنجاح');

    }




    public function render()
    {
        $search ='%'.$this->search.'%';

        return view('livewire.dashboard.directorate',
        ['directorates' => ModelsDirectorate::where('name','LIKE',$search)->paginate(10) ,
        'provinces'  => Province::all()]);
    }
}
