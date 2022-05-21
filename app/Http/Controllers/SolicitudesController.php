<?php

namespace App\Http\Controllers;

//agregando de spatie para permisos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\solicitudes;
use App\Models\user;


class SolicitudesController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-solicitudes|crear-solicitudes|editar-solicitudes|borrar-solicitudes')->only('index');
        $this->middleware('permission:ver-solicitudes', ['only'=>['show']]);
        $this->middleware('permission:craer-solicitudes', ['only'=>['create','store']]);
        $this->middleware('permission:editar-solicitudes', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-solicitudes', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = solicitudes::paginate(5);
        return view('solicitudes.index', compact('solicitudes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitudes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        // aqui solo valido si queiro que sea requerido
        request()->validate([
            'nombre'=> 'required',
            'descripcion' => 'required',
            
        ]);
// con este metodo lo estoy registrando por cada request enviado desde el formulario para poder yo registrar la cc del usuario logueado
        $solici = new solicitudes;
        // este registro es recomendado hacerlo con el id del usuario ok
        $solici->cc = Auth()->user()->cc;
        $solici->nombre = $request->nombre;
        $solici->descripcion = $request->descripcion;
        $solici->save();

        // este es el antiguo metodo de registro 
        // solicitudes::create($request->all());
        return redirect()->route('solicitudes.index');

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
    // aqui se abre el boton edit el parametro solicitud solo tomo el id y busco de nuevo la soliciutd y la guardo en una variable llamada soli
    // cuando se encuentre ese usuario se abrira la pagina editar cargando los datos del usuario con su id
    // mensiono que este metodo es diferente al de blog por que la forma como esta en blog aqui no funciono
    public function edit($id)
    {
        $soli = solicitudes::find($id);

        return view('solicitudes.editar', compact('soli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  los request son los datos del formulario y el modelo solicitudes lo transformo en la variable soli
    // o tambien seria hacerlo asi $soli = new solicitudes; como lo hice en store
    public function update(Request $request, solicitudes $soli)
    {
        $this->validate($request, [
            'nombre'=> 'required',
            'descripcion' => 'required',
            
           ]);
           
// con este comando tomo la cedula del user y la guardo enseguida de esta solicitud y con el otro se termina de
// agregar los demas campos faltantes
           $soli->cc = Auth()->user()->cc;
           $soli->update($request->all());
           return redirect()->route('solicitudes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // este metodo tambien me toco modificarlo ose
    // el id es el parametro que estoy reciviendo desde el index que envio como $solicitud->id
    // aqui solo coloco id luego busco la solicitud con su id y lo guardo en una variable nueva
    // por ultimo lo que traiga esa busqueda lo elimino ok
    public function destroy($id)
    {
        $solifinish = solicitudes::find($id);
        $solifinish->delete();
        return redirect()->route('solicitudes.index');;

    }
}
