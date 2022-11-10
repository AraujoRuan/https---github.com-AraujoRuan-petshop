<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    public function empresa()
    {
        return $this->belongsTo(empresa::class,'empresa_id');
    }
}
