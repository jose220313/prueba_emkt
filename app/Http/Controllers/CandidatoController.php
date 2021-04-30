<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Candidato_Habilidades;
use App\Models\Habilidades;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidato = new Candidato();
        $candidatoHabilidades = new Candidato_Habilidades();

        $candidato->nombre = $request->get('nombre');
        $candidato->apellido = $request->get('apellido');
        $candidato->edad = $request->get('edad');
        $candidato->email = $request->get('email');

        $candidato->save();

        foreach ($request->get('habilidades') as $key => $value) {
            $candidatoHabilidades = Candidato_Habilidades::create([
                'id_candidato' => $candidato->id,
                'id_habilidad' => $value,
            ]);
        }


        return redirect('/somos-emkt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
