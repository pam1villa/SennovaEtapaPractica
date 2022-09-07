<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class RegionalController extends Controller
{
    public function InsertReg(Request $regional)
    {
        $instanciaregional = new App\Regional;
        $instanciaregional->REGIO_Nombre = $regional->REGIO_Nombre;
        
        $instanciaregional->save();
        return redirect('Regional/view');
    }

    public function ViewReg()
    {
        $objetoretornado = App\Regional::All();
        return view('Regional/view',compact('objetoretornado'));
    }

    public function DeleteReg($id)
    {
        $deleteregional = App\Regional::FindOrFail($id);
        $deleteregional->delete();
        return redirect('Regional/view');        
    }

    public function UpdateReg($id)
    {
        $updateregional = App\Regional::FindOrFail($id);
        #Lo enviamos a la vista:  
        return view('Regional/update',compact('updateregional'));
    }

    //Metodo que recibe como oparametro todo mediante la peticio Request y que todo se almacene el la 
    //variable proveedor
    public function UpdateBdReg(Request $regional)
    {
        //Creamos una instancia al proveedor para poder acceder a los metodos que tiene y acceder a sus atributos.
        $instanciaregional = App\Regional::FindOrFail($regional->id);
        $instanciaregional->REGIO_Nombre = $regional->REGIO_Nombre;

        $instanciaregional->update();

        return redirect('Regional/view');        
    }

    //Funcion de listar json (View de cada tabla)
    public function resuljson(){
        $verp =  App\Regional::All();
        $datos = array('data' => $verp);
        return $datos;
    }
}
