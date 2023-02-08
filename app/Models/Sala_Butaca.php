<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala_Butaca extends Model
{
    use HasFactory;
    public function sala(){
        return $this->belongsTo(Sala::class, 'salas_id');
     }
     public function butaca(){
        return $this->belongsTo(Butaca::class, 'butacas_id');
     }   
         public function peliculas(){
            return $this->belongsToMany(Pelicula::class);
         }
}
