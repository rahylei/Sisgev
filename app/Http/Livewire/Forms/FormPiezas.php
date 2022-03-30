<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class FormPiezas extends Component
{

    public $item = false;

    public function alert(){
        if($this->item){
            $this->item = false; 
        } else {
            $this->item = true;
        }
    }

    public function render()
    {
        return view('livewire.forms.form-piezas');
    }
}
