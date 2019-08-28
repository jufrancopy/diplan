<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use App\Admin\FodaCategoria;

class FodaCategoriaController extends Controller
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
        $categorias=FodaCategoria::nombre($request->get('nombre'))->orderBy('id','DESC')->paginate(10);
        
        return view('admin.fodas.categorias.index', get_defined_vars())
                ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fodas.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria= FodaCategoria::create($request->all());

        return redirect()->route('foda-categorias.index')
            ->with('success','Categoria creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria=FodaCategoria::find($id);
        return view('admin.fodas.categorias.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=FodaCategoria::find($id);
        
        return view('admin.fodas.categorias.edit', get_defined_vars());
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
        $categoria=FodaCategoria::find($id);
        $categoria->fill($request->all())->save();
           
        return redirect()->route('foda-categorias.index')
            ->with('success','Categoria actualizada satisfactoriamente');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FodaCategoria::find($id)->delete();
        return back()->with('success', 'Categoria eliminada correctamente.');
    }
}

