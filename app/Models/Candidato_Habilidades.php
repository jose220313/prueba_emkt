<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato_Habilidades extends Model
{
    use HasFactory;
    protected $fillable = ['id_candidato','id_habilidad'];

    public function habilidades(){
        return $this->belongsTo('App\Models\Habilidades');
    }

    public function candidatos()
    {
       return $this->belongsTo('App\Models\Candidato');
    }
}
