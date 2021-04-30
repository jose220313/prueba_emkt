<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidades extends Model
{
    use HasFactory;

    public function candidato_habilidades(){
        return $this->hasMany('App\Models\Candidato_Habilidades');
    }
}
