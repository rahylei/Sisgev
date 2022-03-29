<?php

namespace App\View\Components\layouts\sitelayout;

use Illuminate\View\Component;
use App\Models\User;
use App\Models\Linea;
use App\Models\Pieza;
use App\Models\Plantilla;

class main extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $users;
    public $c_us = ['name','id'];
    public $lineas;
    public $piezas;
    public $plantillas;

    public function __construct(User $users, Linea $lineas, Pieza $piezas, Plantilla $plantillas)
    {
        $this->users = $users->all();
        $this->lineas = $lineas->all();
        $this->piezas = $piezas->all();
        $this->plantillas = $plantillas->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.sitelayout.main');
    }
}
