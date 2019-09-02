<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\FodaAspecto;
use App\Admin\FodaCategoria;
use App\Admin\FodaPerfil;
use App\Admin\FodaAnalisis;

class FodaCruceAmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $idPerfil)
    {
        $idPerfil = $request->idPerfil;
        $perfil = FodaPerfil::where('id', '=', $idPerfil)->first();
        $matriz =    0.18; 

        //Ambiente Interno - Debilidad
        $debilidades = FodaAnalisis::
            where('perfil_id', '=', $idPerfil)
            ->select(DB::raw('foda_analisis.*,(foda_analisis.ocurrencia * foda_analisis.impacto) as matriz'))
            ->havingRaw("matriz > $matriz")
            ->where('tipo', 'Debilidad')
            ->get();

        //Ambiente Interno - Fortaleza
        $fortalezas = FodaAnalisis::
            where('perfil_id', '=', $idPerfil)
            ->select(DB::raw('foda_analisis.*,(foda_analisis.ocurrencia * foda_analisis.impacto) as matriz'))
            ->havingRaw("matriz > $matriz")
            ->where('tipo', 'Fortaleza')
            ->get();
        
        //Ambiente Externo - Oportunidad
        $oportunidades = FodaAnalisis::
            where('perfil_id', '=', $idPerfil)
            ->select(DB::raw('foda_analisis.*,(foda_analisis.ocurrencia * foda_analisis.impacto) as matriz'))
            ->havingRaw("matriz > $matriz")
            ->where('tipo', 'Oportunidad')
            ->get();
            
        //Ambiente Externo - Amenaza
        $amenazas = FodaAnalisis::
            where('perfil_id', '=', $idPerfil)
            ->select(DB::raw('foda_analisis.*,(foda_analisis.ocurrencia * foda_analisis.impacto) as matriz'))
            ->havingRaw("matriz > $matriz")
            ->where('tipo', 'Amenaza')
            ->get();    

        return view('admin.fodas.analisis.cruce-ambientes', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
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
        //
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
