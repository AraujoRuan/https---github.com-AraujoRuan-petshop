<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Loja extends Component
{
    public $message = "";
    public $loja;

    public function render()
    {
         $this->loja = \App\Models\Loja::all();
        //  $this->loja->marcas->produtos->get();
        //  $this->loja->cliente->empresa->user->get();
        
        return view('livewire.loja');
    }

    public function create()
    {
        \App\Models\Loja::create([
            'nome'=>$this->message,

        ]);
               $this->render();
    }
}
