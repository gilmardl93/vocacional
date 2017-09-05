<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Http\Requests\InscripcionRequest;
use App\Models\Facultad;

class InscripcionController extends Controller
{
    public function index()
    {
        $facultad = Facultad::all();
        return view('inscripcion.index', compact('facultad'));
    }

    public function registrar(InscripcionRequest $request)
    {
        $validar = Inscripcion::Validar($request->dni)->count();
        if($validar == 0)
        {
            if( $request->FAUA == "" && $request->FIC == "" && $request->FIECS == "" && $request->FIGMN == "" &&
                $request->FIIS == "" && $request->FIEE == "" && $request->FIM == "" && $request->FC == "" &&
                $request->FIP == "" && $request->FIQT == "" && $request->FIA == "")
            {
                return redirect('/')->with('message','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>DEBE SELECCIONAR UNA FACULTAD COMO MINIMO!</strong> </div>');
            }else
            {
                $data = new Inscripcion();
                $data->paterno = strtoupper($request->paterno);
                $data->materno = strtoupper($request->materno);
                $data->nombres = strtoupper($request->nombres);
                $data->edad = $request->edad;
                $data->dni = $request->dni;
                $data->email = $request->email;
                $data->telefono = $request->telefono;
                $data->FAUA = $request->FAUA;
                $data->FIC = $request->FIC;
                $data->FIECS = $request->FIECS;
                $data->FIGMN = $request->FIGMN;
                $data->FIIS = $request->FIIS;
                $data->FIEE = $request->FIEE;
                $data->FIM = $request->FIM;
                $data->FC = $request->FC;
                $data->FIP = $request->FIP;
                $data->FIQT = $request->FIQT;
                $data->FIA = $request->FIA;
                $data->colegio = $request->colegio;
                $data->save();
                return redirect('/')->with('message','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>INSCRIPCION SATISFACTORIA!</strong> </div>');
            }
        }else 
        {
            return redirect('/')->with('message','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>USTED SE ENCUENTRA REGISTRADO!</strong> </div>');
        }
        
    }
}
