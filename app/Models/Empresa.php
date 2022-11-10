<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public function cliente()
    {
        return $this->hasmany(Cliente::class,'cliente_id');
    }

    public function funcionario()
    {
        return $this->hasmany(Cliente::class,'funcionario_id');
    }

    public function produto()
    {
        return $this->belongsToMany(Produto::class,'produto_id');
    }

}
