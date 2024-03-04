<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aplicacion;
use Illuminate\Support\Facades\Storage;

class DescargarAplicacionController extends Controller
{
    public function descargar($id)
    {
        $aplicacion = Aplicacion::find($id);

        if ($aplicacion) {
            $aplicacion->increment('descargas');
            $rutaArchivo = public_path('archivos_apk/'.$aplicacion->archivo);
            return response()->download($rutaArchivo, $aplicacion->nombre.'.apk');
        }

        abort(404);
    }
}
