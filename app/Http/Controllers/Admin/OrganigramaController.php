<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Organigrama;

class OrganigramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias = Organigrama::groupBy('rango')
            ->selectRaw('count(*) as total, rango')
            ->get();
        

        
        $gerencias = Organigrama::where('rango', '=', 'gerencia')->get();
        dd($gerencias = Organigrama::where('rango', '=', 'direccion')->get());
        // $presidencias = SubGerencia::where('gerencias_id', '=', 2)->get();
        // $gdts = SubGerencia::where('gerencias_id', '=', 3)->get();
        // $gafs = SubGerencia::where('gerencias_id', '=', 4)->get();
        // $gss = SubGerencia::where('gerencias_id', '=', 5)->get();
        // $gals = SubGerencia::where('gerencias_id', '=', 6)->get();
        // $gpes = SubGerencia::where('gerencias_id', '=', 7)->get();



        return view('admin.organigramas.index', get_defined_vars());
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
