<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Province as ModelsProvince;
use Livewire\Component;

use Livewire\WithPagination;

class Province extends Component
{
    protected $paginationTheme = 'bootstrap';


    public $search =" ";
    public $active;



    public $EditId;
    public $name ;
    public $addname;

    public $msgEdit;

    use WithPagination;



    public function showDataprovince($id){

        $province = ModelsProvince::where('id',$id)->first();
        $this->EditId= $province->id;
          $this->name= $province->name;

      }

    public function createProvince(){

        if($this->addname != null){

            $province = new ModelsProvince();

            $province->name = $this->addname;
            $province->is_active ='1';
            $province->save();

            $this->addname = null;
        }

    }

    public function updateprovince(){

       ModelsProvince::where('id',$this->EditId)
        ->update(
                 ['name'  => $this->name,
        ]);

       $this->msgEdit ='تم حفظ التعديل بنجاح';

    //    return redirect()->back()->with('success','تم تغيير الصورة الشخصية بنجاح ');

       $this->emit('success','تم حفظ التعديل بنجاح');

    }

    public function render()
    {

        $search ='%'.$this->search.'%';

        // return view('livewire.dashboard.province',
        //           ['provinces' => ModelsProvince::where('name','LIKE',$search)->paginate(10) ]);
                  return view('livewire.dashboard.province' , ['provinces' => ModelsProvince::all() ]);
    }

}
