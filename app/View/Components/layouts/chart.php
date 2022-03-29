<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class chart extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $items;
    public $datos;

    public function __construct($items, $datos)
    {
        $this->items = $items;
        $this->datos = $datos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.chart');
    }
}
