<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;




class Notifications extends Component
{
    public $notifications= [];
    public $show =null;

    public function  notificationclick(){

        if($this->show == null ){
            $notifications=Auth::user()->notifications->take(20);
           $this->notifications=$notifications;

           $this->show = 'show';
        }else{
            $this->show = null;
        }

    }

    public function markAsRead(){
        $notifications=Auth::user()->notifications->markAsRead();
        // $this->notifications=$notifications;
    }



    public function render()
    {

        return view('livewire.notifications');
    }
}
