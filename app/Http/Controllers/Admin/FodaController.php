<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Foda;

class FodaController extends Controller
{
    function __construct()
    {
         $this->middleware('auth');
         
    }
    
    public function dashboard()
    {
        $totalInfraestructura       = Foda::where('nivel', '=', 'infraestructura')->count();
        $totalTTHH                  = Foda::where('nivel', '=', 'tthh')->count();
        $totalTecnologia            = Foda::where('nivel', '=', 'tecnologia')->count();
        $totalMarkVenta             = Foda::where('nivel', '=', 'marqueting_ventas')->count();
        $totalLogInterna            = Foda::where('nivel', '=', 'logistica_interna')->count();
        $totalLogExterna            = Foda::where('nivel', '=', 'logistica_externa')->count();
        $totalOperaciones           = Foda::where('nivel', '=', 'operaciones')->count();
        $totalSerPostVenta           = Foda::where('nivel', '=', 'servicio_post_venta')->count();
        $totalCompras               = Foda::where('nivel', '=', 'compras')->count();

        return view('admin.fodas.dashboard', get_defined_vars());

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function infraestructura()
        {
             $fodas = Foda::get();
             $infraestructuras = Foda::where('nivel', '=','infraestructura')->paginate(10);

             return view('admin.fodas.infraestructura', get_defined_vars()); 
        }


     public function tthh()
        {
            $fodas = Foda::get();
            $tthhs = Foda::where('nivel', '=','tthh')->paginate(10);

             return view('admin.fodas.tthh', get_defined_vars()); 
        }   

     public function tecnologia()
        {
            $fodas = Foda::get();
            $tecnologias = Foda::where('nivel', '=','tecnologia')->paginate(10);

             return view('admin.fodas.tecnologia', get_defined_vars()); 
        }

    public function compra()
        {
            $fodas = Foda::get();
            $compras = Foda::where('nivel', '=','compras')->paginate(10);

             return view('admin.fodas.compras', get_defined_vars()); 
        }        

     public function logisticaInterna()
        {
            $fodas = Foda::get();
            $logisticaInternas = Foda::where('nivel', '=','logistica_interna')->paginate(10);

             return view('admin.fodas.logistica_interna', get_defined_vars()); 
        }    
     public function logisticaExterna()
        {
            $fodas = Foda::get();
            $logisticaExternas = Foda::where('nivel', '=','logistica_externa')->paginate(10);

             return view('admin.fodas.logistica_externa', get_defined_vars()); 
        }

     public function operaciones()
        {
            $fodas = Foda::get();
            $operaciones = Foda::where('nivel', '=','operaciones')->paginate(10);

             return view('admin.fodas.operaciones', get_defined_vars()); 
        }


     public function postVentas()
        {
            $fodas = Foda::get();
            $postVentas = Foda::where('nivel', '=','servicio_post_venta')->paginate(10);

             return view('admin.fodas.servicio_post_venta', get_defined_vars()); 
        }   

public function marquetingVentas()
{
$fodas = Foda::get();
$operaciones = Foda::where('nivel', '=','marqueting_ventas')->paginate(10);
return view('admin.fodas.logistica_externa', get_defined_vars());
}
                  

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
