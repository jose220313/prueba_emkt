<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Habilidades;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $habilidades = Habilidades::all();
        return view('Home')->with('habilidades', $habilidades);
    }
}
