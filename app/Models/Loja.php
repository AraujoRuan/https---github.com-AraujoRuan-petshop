<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Loja extends Model
{
    use HasFactory;
    public $fillable = [
        'nome',
        'endereco',
        'cnpj',
        'telefone',
        'cliente_id'

    ];



    public function funcionario()
    {
        return $this->hasMany(Funcionarios::class,"funcionario_id");
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,"cliente_id");
    }

    public function marca()
    {
        return $this->hasMany(Marca::class,"marca_id");
    }

    public function animal()
    {
        return $this->hasMany(Animal::class,"animal_id");
    }
}



