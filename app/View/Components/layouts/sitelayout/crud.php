<?php

namespace App\View\Components\layouts\sitelayout;

use Illuminate\View\Component;
use App\Models\Pieza;
use App\Models\Linea;
use App\Models\User;
use App\Models\Plantilla;


class crud extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */    
    public $items;
    public $cols;
    public $numc;
    public $lista;

    public function __construct($items, $cols, $numc, User $us, Linea $li, Pieza $pi)
    {
        $this->items = (int)$items;
        $this->cols = $cols;
        $this->numc = (int)$numc;

        switch($items) {
            case 0:
                $this->lista = $us->all();
                break;
            case 1:
                $this->lista = $li->all();
                break;
            case 2:
                $this->lista = $pi->all();
                break;

        }
    }

    public function getItems($item){
        switch($item) {
            case 0:
                $this->lista = User::all();
                break;
            case 1:
                $this->lista = Linea::all();
                break;
            case 2:
                $this->lista = Pieza::all();
                break;

        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.sitelayout.crud');
    }
}
