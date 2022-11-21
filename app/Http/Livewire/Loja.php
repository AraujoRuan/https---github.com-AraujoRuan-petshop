<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Loja extends Component
{
    public $message = "";

    public function render()
    {
        return view('livewire.loja');
    }
}
