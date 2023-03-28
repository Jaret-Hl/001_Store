<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Venta::class);
    }

    //relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Images::class,'imageable');
    }
}
