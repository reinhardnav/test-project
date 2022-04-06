<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Employee extends Component
{
    public $query = "";
    public function mount($id){


    }
    public function render()
    {
        $employee = User::where("name","like","%".$this->query."%")->get();
        return view('livewire.employee',[
            'employee'=>$employee
        ]);
    }
}
