<?php

namespace App\Http\Livewire;


use App\Models\Cliente;
use Livewire\Component;

class Loja extends Component
{
    public $message = "";

    public function render()
    {
         $loja = Cliente::with('user')->get();

        return view('livewire.loja',[
            'loja'=> $loja
        ]);
    }

    public function create()
    {
        dd($this->message);
    }
}
