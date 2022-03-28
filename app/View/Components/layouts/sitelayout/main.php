<?php

namespace App\View\Components\layouts\sitelayout;

use Illuminate\View\Component;
use App\Models\User;

class main extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $users;
    public function __construct(User $lista)
    {
        $this->users = $lista->all();
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
