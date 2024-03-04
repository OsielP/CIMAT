<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aplicacion;
use Illuminate\Support\Facades\Schema;




class AplicacionController extends Controller
{
    public function eliminarAplicacion($id)
{
    $aplicacion = Aplicacion::findOrFail($id);
    
    // Eliminar la aplicación de la base de datos
    $aplicacion->delete();

    return redirect()->back()->with('success', 'Aplicación eliminada correctamente.');
}
    public function mostrarAplicacionesLectura() {
        $aplicaciones = Aplicacion::where('lectura', '1')->get();
        return view('categorias.lectura', compact('aplicaciones'));
    }
    
    public function mostrarAplicacionesMatematicas() {
        $aplicaciones = Aplicacion::where('matematicas', '1')->get();
        return view('categorias.matematicas', compact('aplicaciones'));
    }
    
    public function mostrarAplicacionesGeografia() {
        $aplicaciones = Aplicacion::where('geografia', '1')->get();
        return view('categorias.geografia', compact('aplicaciones'));
    }
    
    public function mostrarAplicacionesRealidadVirtual() {
        $aplicaciones = Aplicacion::where('realidad_virtual', '1')->get();
        return view('categorias.realidad_virtual', compact('aplicaciones'));
    }
    
    public function mostrarAplicacionesEscritura() {
        $aplicaciones = Aplicacion::where('escritura', '1')->get();
        return view('categorias.escritura', compact('aplicaciones'));
    }
    
    public function mostrarAplicacionesCompetenciasBasicas() {
        $aplicaciones = Aplicacion::where('competencias_basicas', '1')->get();
        return view('categorias.competencias_basicas', compact('aplicaciones'));
    }
    
    public function mostrarAplicacionesEntretenimiento() {
        $aplicaciones = Aplicacion::where('entretenimiento', '1')->get();
        return view('categorias.entretenimiento', compact('aplicaciones'));
    }
    
    public function buscar(Request $request)
    {
        $query = $request->input('query');
    
        // Declare $booleanFields outside the closure
        $booleanFields = ['lectura', 'matematicas', 'geografia', 'competencias_basicas', 'escritura', 'realidad_virtual', 'entretenimiento'];
    
        // Declare $educationLevels outside the closure
        $educationLevels = ['preescolar', 'primaria', 'secundaria', 'preparatoria', 'educacion_especial'];
    
        $resultados = Aplicacion::where(function ($queryBuilder) use ($query, $booleanFields, $educationLevels) {
            $queryBuilder->where('nombre', 'LIKE', '%' . $query . '%')
                ->orWhere('descripcion_corta', 'LIKE', '%' . $query . '%')
                ->orWhere('descripcion_larga', 'LIKE', '%' . $query . '%');
    
            // Check if the query is a boolean field
            if (in_array($query, $booleanFields)) {
                $queryBuilder->orWhere($query, 0);
            }
    
            // Check if the query is a boolean field (case-insensitive)
            if (in_array(strtolower($query), array_map('strtolower', $booleanFields))) {
                $queryBuilder->orWhere(strtolower($query), 1);
            }
    
            // Check if the query is an education level field
            if (in_array($query, $educationLevels)) {
                $queryBuilder->orWhere($query, 1);
            }
    
            // Check if the query is an education level field (case-insensitive)
            if (in_array(strtolower($query), array_map('strtolower', $educationLevels))) {
                $queryBuilder->orWhere(strtolower($query), 1);
            }
        })
        ->where(function ($queryBuilder) use ($query, $booleanFields, $educationLevels) {
            $queryBuilder->where(function ($nestedQueryBuilder) use ($query, $booleanFields, $educationLevels) {
                foreach ($educationLevels as $level) {
                    $nestedQueryBuilder->orWhere($level, 1);
                }
            });
        })
        ->get();
    
        return view('aplicaciones.resultados', ['resultados' => $resultados, 'query' => $query, 'booleanFields' => $booleanFields]);
    }
            





    
    
    public function subirArchivo(Request $request)
{
    // Procesar la imagen
    $imagen = $request->file('imagen');
    $nombreImagen = time().'.'.$imagen->getClientOriginalExtension();
    $imagen->move(public_path('imagenes'), $nombreImagen);

    // Procesar archivo
    $archivo = $request->file('archivo');
    $nombreArchivo = time().'.'.$archivo->getClientOriginalExtension();
    $archivo->move(public_path('archivos_apk'), $nombreArchivo);

    $publico_dirigido = $request->input('publico_dirigido'); // Esto será un arreglo con los valores seleccionados

    Aplicacion::create([
        'nombre' => $request->input('nombre'),
        'descripcion_corta' => $request->input('descripcion_corta'), // Cambiado de 'descripcion'
        'descripcion_larga' => $request->input('descripcion_larga'), // Nuevo campo: Descripcion larga
        'peso' => $request->input('peso'),
        'preescolar' => in_array('preescolar', $publico_dirigido),
        'primaria' => in_array('primaria', $publico_dirigido),
        'secundaria' => in_array('secundaria', $publico_dirigido),
        'preparatoria' => in_array('preparatoria', $publico_dirigido),
        'educacion_especial' => in_array('educacion_especial', $publico_dirigido),
        'lectura' => in_array('lectura', $request->input('categoria')) ? '1' : '0',
        'matematicas' => in_array('matematicas', $request->input('categoria')) ? '1' : '0',
        'geografia' => in_array('geografia', $request->input('categoria')) ? '1' : '0',
        'competencias_basicas' => in_array('competencias_basicas', $request->input('categoria')) ? '1' : '0',
        'escritura' => in_array('escritura', $request->input('categoria')) ? '1' : '0',
        'realidad_virtual' => in_array('realidad_virtual', $request->input('categoria')) ? '1' : '0',
        'entretenimiento' => in_array('entretenimiento', $request->input('categoria')) ? '1' : '0',
        'archivo' => $nombreArchivo,
        'imagen' => $nombreImagen,
    ]);

    return redirect()->back()->with('success', 'Archivo .apk subido correctamente.');
}






//descargar aplicaciones
public function listarAplicaciones()
{
    $aplicaciones = Aplicacion::all();
    return view('listar_aplicaciones', compact('aplicaciones'));
}
public function descargarAplicacion($id)
{
    $aplicacion = Aplicacion::findOrFail($id);
    $rutaArchivo = public_path('archivos_apk/'.$aplicacion->archivo);

    return response()->download($rutaArchivo);
}





}
