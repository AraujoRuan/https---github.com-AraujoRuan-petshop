<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    public function produto()
    {
        return $this->hasMany(Produto::class,'produto_id');
    }

    public function empresa()
    {
        return $this->belongsTo(empresa::class,'produto_id');
    }
}

