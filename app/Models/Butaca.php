<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Butaca extends Model
{
    use HasFactory;
    //muchos a muchos
    public function sala_(){
        return $this->belongsToMany(sala::class);
     }
}
