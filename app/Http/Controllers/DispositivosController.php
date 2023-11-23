<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DispositivosController extends Controller
{
    public function mostrarDispositivos(Request $request): View
    {
        //$dispositivos = DB::table('dispositivos')->get();

        $dispositivos = Dispositivo::select('id','tipo', 'modelo', 'precio', 'url')->get();

        return view('dispositivos', ['dispositivos' => $dispositivos]);
    }

    public function verFormulario(Request $request): View
    {
        return view('nuevoDispositivo');
    }

    public function anadirDispositivo(Request $request)
    {
        //QUERY BUILDER:
        //datos a insertar
        // $tipo = $request->input('tipo');
        // $modelo = $request->input('modelo');
        // $precio = $request->input('precio');
        // $url = $request->input('url');

        //insertar datos en la tabla
        // DB::table('dispositivos')->insert([
        //     'tipo' => $tipo,
        //     'modelo' => $modelo,
        //     'precio' => $precio ,
        //     'url' => $url,
        // ]);


        //ELOQUENT
        DB::table('dispositivos')->insert([
            'tipo' => $request->input('tipo'),
            'modelo' => $request->input('modelo'),
            'precio' => $request->input('precio'),
            'url' => $request->input('url'),
        ]);

        return redirect()->route('dispositivos')->with('success', 'Dispositivo insertado correctamente.');
    }

    public function eliminarDispositivo(Dispositivo $dispositivo)
    {
      
        $dispositivo->delete();

        return redirect()->route('dispositivos')->with('success','Dispositivo eliminado correctamente');
    }

    public function verFormularioEditar(Dispositivo $dispositivo)
    {   
        return view('modificarDispositivo')->with('dispositivo', $dispositivo);
    }

    public function editarDispositivo(Request $request)
    {

    }
}
