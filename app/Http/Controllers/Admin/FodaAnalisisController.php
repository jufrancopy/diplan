<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use DB;

use App\Admin\FodaAspecto;
use App\Admin\FodaCategoria;
use App\Admin\FodaPerfil;
use App\Admin\FodaAnalisis;

class FodaAnalisisController extends Controller
{
    //antes de procesar el index() ejecuta el metodo consturctor
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function listarCategorias($id)
    // {
    //     $categoriasDelPerfil = FodaPerfil::find($id)->paginate(10);



    //     return view('admin.fodas.analisis.index', get_defined_vars());
    // }

    public function index(Request $request)
    {
        $analizados = FodaAnalisis::orderBy('id', 'ASC')->get();
        $aspectos=$analizados->aspectos()->orderBy('nombre', 'ASC')->get();
        
        // Crear un array vacio para almacenar aspectos.
        $aspectosChecked = [];
        
        // Obtener las aspectos relacionados al analisis.
        foreach ($analizados->aspectos as $aspecto) {
            
            // Acumular las aspectos en el array '$aspectosChecked'.
            $aspectosChecked[] = $aspecto->id;
        }
        return view('admin.fodas.analisis.index', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function listadoPerfiles(Request $request){
        
        $perfiles=FodaPerfil::nombre($request->get('nombre'))->orderBy('id','DESC')->paginate(10);
        
        
            return view('admin.fodas.analisis.perfiles', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function seleccionarAmbiente(Request $request, $id){
        $perfil=FodaPerfil::find($id);
        $categorias=$perfil->categorias()->orderBy('nombre', 'ASC')->get();
        
        $categoriasChecked = [];
        
        foreach ($perfil->categorias as $categoria) {
            $categoriasChecked[] = $categoria->id;
        }

        return view('admin.fodas.analisis.ambientes', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function listadoCategoriaAspectos(Request $request)
    {
        $perfil_id = $request->idPerfil;
        $analisis= FodaAnalisis::where('perfil_id', '=', $perfil_id)->get();
        $perfiles=FodaPerfil::nombre($request->get('nombre'))->orderBy('id','DESC')->paginate(10);
        
        if ($analisis->isNotEmpty()) {
            // colección no está vacía
            return view('admin.fodas.analisis.listado-categorias-aspectos', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
        
        } else {
           // colección vacía
           return view('admin.fodas.analisis.error', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
           
        }
        
    }

    public function analisisCategoriasAmbienteInterno(Request $request, $idPerfil)
    {
        $idPerfil = $request->idPerfil;
        $categorias = FodaCategoria::where('ambiente', '=', 'interno')->get();

        return view('admin.fodas.analisis.analisis-categorias', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function analisisCategoriasAmbienteExterno(Request $request, $idPerfil)
    {
        $idPerfil = $request->idPerfil;
        $categorias = FodaCategoria::where('ambiente', '=', 'externo')->get();
        

        return view('admin.fodas.analisis.analisis-categorias', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    

    public function categoriasAmbienteInterno(Request $request, $idPerfil)
    {
        $idPerfil = $request->idPerfil;
        $categorias = FodaCategoria::where('ambiente', '=', 'interno')->get();

        return view('admin.fodas.analisis.categorias', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function categoriasAmbienteExterno(Request $request, $idPerfil)
    {
        $idPerfil = $request->idPerfil;
        $categorias = FodaCategoria::where('ambiente', '=', 'externo')->get();
        

        return view('admin.fodas.analisis.categorias', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function aspectosCategoria(Request $request, $idPerfil, $idCategoria)
    {
        $idPerfil = $request->idPerfil;
        $idCategoria = $request->idCategoria;
        $aspectos = FodaAspecto::where('categoria_id', '=', $idCategoria)->get();

        return view('admin.fodas.analisis.aspectos', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $idPerfil = $request->idPerfil;
        $idAspecto = $request->idAspecto;
        $perfil = FodaPerfil::where('id', '=', $idPerfil)->get();
        $aspecto = FodaAspecto::where('id', '=', $idAspecto)->get();
        $categoriaId = $aspecto[0]->categoria_id;
        $ambiente = FodaCategoria::where('id', '=', $categoriaId)->get();

        return view('admin.fodas.analisis.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $count = count($request->input('aspecto_id'));
    for($i = 0; $i < $count; ++$i){

        $analisis = FodaAnalisis::create([
            'user_id'       => $request->user_id, 
            'aspecto_id'    => $request->aspecto_id[$i],
            'perfil_id'     => $request->perfil_id,
            'tipo'          => $request->tipo,
            'ocurrencia'    => $request->ocurrencia,
            'impacto'       => $request->impacto,
            ]);
        }   

        return redirect()->route('foda-listado-categorias-aspectos', $analisis->perfil_id)
            ->with('success','Analisis creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $analizados = FodaAnalisis::where('aspecto_id','=', $id)->get();
        return view('admin.fodas.analisis.ponderaciones', get_defined_vars())
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function ponderaciones(Request $request, $idAspecto, $idPerfil)
    {
        $idAspecto = $request->idAspecto;
        $idPerfil = $request->idPerfil;
        $analisis = FodaAnalisis::where('perfil_id', '=', $idPerfil)->where('aspecto_id', '=', $idAspecto)->get();
        $aspecto = FodaAspecto::where('id', '=', $idAspecto)->get();
        $categoriaId = $aspecto[0]->categoria_id;
        $ambiente = FodaCategoria::where('id', '=', $categoriaId)->get();

        return view('admin.fodas.analisis.edit', get_defined_vars());
    }

    public function edit(Request $request, $id)
    {
        $analisis = FodaAnalisis::find($id);
        $aspectoID = $analisis->aspecto_id;
        $aspecto = FodaAspecto::where('id', '=', $aspectoID)->get();
        
        $idCategoria = $aspecto[0]->categoria_id;
        
        $ambiente = FodaCategoria::where('id', '=', $idCategoria)->get();
        $ambiente[0]->ambiente;
        // Crear un array vac铆o para almacenar las materias.
        $aspectosChecked = [];
        
        // Obtener las materias relacionada a la matriculaci贸n actual.
        foreach ($analisis->aspectos as $aspecto) {
            
            // Acumular las materias en el array '$materiasChecked'.
            $aspectosChecked[] = $aspecto->id;
        }

        return view('admin.fodas.analisis.edit', get_defined_vars());
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
        $analisis = FodaAnalisis::find($id);
        $analisis->fill($request->all())->save();
        
        return redirect()->route('foda-listado-categorias-aspectos', $analisis->perfil_id)
            ->with('success','Analizado satisfactoriamente');
    
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