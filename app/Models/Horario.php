<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    
 //relacion muchos a muchos 
public function hora(){
    return $this->belongsTo(Hora::class, 'horas_id');
 }
 
 //relacion muchos a muchos 
public function dia(){
    return $this->belongsTo(Dia::class, 'dias_id');
 }
 
 //relacion muchos a muchos 
public function pelicula(){
    return $this->belongsTo(Pelicula::class, 'peliculas_id');
 }

  //relacion muchos a muchos 
public function entradas(){
    return $this->belongsToMany(Entrada::class);
 }
}
