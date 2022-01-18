<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $showDiv = false;

    protected $listeners = ['postAdded' => 'openDiv'];

    public function openDiv()
    {
        $this->showDiv = !$this->showDiv;
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
