<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function marca()
    {
        return $this->belongsTo(Marca::class,'marca_id');
    }

    public function empresa()
    {
        return $this->belongsTo(empresa::class,'empresa_id');
    }
}
