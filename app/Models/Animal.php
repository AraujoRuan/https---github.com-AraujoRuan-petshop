<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function cliente()
    {
        return $this->hasMany(Cliente::class,"cliente_id");
        
    }

    public function funcionario()
    {
        return $this->hasMany(Funcionario::class,'funcionario_id');
    }
}
