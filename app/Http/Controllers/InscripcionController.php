<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Http\Requests\InscripcionRequest;


class InscripcionController extends Controller
{
    public function index()
    {
        return view('inscripcion.index');
    }

    public function registrar(InscripcionRequest $request)
    {
        $validar = Inscripcion::Validar($request->dni)->count();
        if($validar == 0)
        {
            $data = new Inscripcion();
            $data->paterno = strtoupper($request->paterno);
            $data->materno = strtoupper($request->materno);
            $data->nombres = strtoupper($request->nombres);
            $data->edad = $request->edad;
            $data->dni = $request->dni;
            $data->email = $request->email;
            $data->colegio = $request->colegio;
            $data->save();

            return redirect('/')->with('message','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>INSCRIPCION SATISFACTORIA!</strong> </div>');
        }else 
        {
            return redirect('/')->with('message','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>USTED SE ENCUENTRA REGISTRADO!</strong> </div>');

        }
    }
}
