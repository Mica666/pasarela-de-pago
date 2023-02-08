<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
       //muchos a muchos
       public function sala_butacas(){
        return $this->belongsToMany(Sala_Butaca::class);
     }

     //relacion uno a uno
    public function pelicula(){
        return $this->hasOne(Pelicula::class);
     }
}
