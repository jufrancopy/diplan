<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use App\Admin\FodaAspecto;
use App\Admin\FodaCategoria;
use App\Admin\FodaModelo;

class FodaAspectoController extends Controller
{
    //antes de procesar el index() ejecuta el metodo consturctor
    public function __construct(){
        $this->middleware('auth');
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $aspectos=FodaAspecto::nombre($request->get('nombre'))->orderBy('id','DESC')->paginate(10);
        
        return view('admin.fodas.aspectos.index', get_defined_vars())
                ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function elegirModelo(Request $request)
    {  
        $modelos=FodaModelo::nombre($request->get('nombre'))->orderBy('id','DESC')->paginate(10);
        
        return view('admin.fodas.aspectos.modelos', get_defined_vars())
                ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias =FodaCategoria::orderBy('id','ASC')->pluck('nombre', 'id');
        
        return view('admin.fodas.aspectos.create', get_defined_vars());
    }

    public function crearAspectos(Request $request, $idCategoria){

        $categoria = FodaCategoria::find($idCategoria);
        
        
        return view('admin.fodas.aspectos.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aspecto= FodaAspecto::create($request->all());

        return redirect()->route('foda-modelo-categoria-aspectos', $aspecto->categoria_id)
            ->with('success','Aspecto creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aspecto=FodaAspecto::find($id);
        return view('admin.fodas.aspectos.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=FodaCategoria::orderBy('id', 'ASC')->pluck('nombre','id');
        $aspecto=FodaAspecto::find($id);
        return view('admin.fodas.aspectos.edit', get_defined_vars());
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
        $aspecto=FodaAspecto::find($id);
        $aspecto->fill($request->all())->save();
           
        
        return redirect()->route('foda-modelo-categoria-aspectos', $aspecto->categoria_id)
            ->with('success','Aspecto actualizado satisfactoriamente');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FodaAspecto::find($id)->delete();
        return back()->with('success', 'Aspecto eliminado correctamente.');
    }
}

