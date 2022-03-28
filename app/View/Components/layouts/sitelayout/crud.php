<?php

namespace App\View\Components\layouts\sitelayout;

use Illuminate\View\Component;


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

    public function __construct($items, $cols, $numc)
    {
        $this->items = $items;
        $this->cols = $cols;
        $this->numc = (int)$numc;
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
