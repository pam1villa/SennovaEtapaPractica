<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CentroFormacionController extends Controller
{

    public function ViewInsert()
    {
        $objetoretornado = App\Regional::all();
        return view('CentroFormacion/insert', compact('objetoretornado'));
    }


    public function InsertCen(Request $centroformacion)
    {
        $instanciacentroformacion = new App\CentroFormacion;
        $instanciacentroformacion->CENTR_Nombre = $centroformacion->CENTR_Nombre;
        $instanciacentroformacion->id_regional = $centroformacion->id_regional;

        
        $instanciacentroformacion->save();
        return redirect('CentroFormacion/view');
    }

    public function ViewCen()
    {
        $objetoretornado = App\CentroFormacion::All();
        return view('CentroFormacion/view',compact('objetoretornado'));
    }

    public function DeleteCen($id)
    {
        $deletecentroformacion = App\CentroFormacion::FindOrFail($id);
        $deletecentroformacion->delete();
        return redirect('CentroFormacion/view');        
    }

    public function UpdateCen($id)
    {
        $updatecentroformacion = App\CentroFormacion::FindOrFail($id);
        #Lo enviamos a la vista:  
        return view('CentroFormacion/update',compact('updatecentroformacion'));
    }

    //Metodo que recibe como oparametro todo mediante la peticio Request y que todo se almacene el la 
    //variable proveedor
    public function UpdateBdCen(Request $centroformacion)
    {
        //Creamos una instancia al proveedor para poder acceder a los metodos que tiene y acceder a sus atributos.
        $instanciacentroformacion = App\CentroFormacion::FindOrFail($centroformacion->id);
        $instanciacentroformacion->CENTR_Nombre = $centroformacion->CENTR_Nombre;

        $instanciacentroformacion->update();

        return redirect('CentroFormacion/view');        
    }

    //Funcion de listar json (View de cada tabla)
    public function resuljson(){
        $verp =  App\CentroFormacion::All();
        $datos = array('data' => $verp);
        return $datos;
    }
}
