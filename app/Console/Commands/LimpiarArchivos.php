<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LimpiarArchivos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:limpiar-archivos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
{
    $aplicaciones = Aplicacion::all();

    foreach ($aplicaciones as $aplicacion) {
        $rutaArchivo = public_path('archivos_apk/'.$aplicacion->archivo);

        if (!file_exists($rutaArchivo)) {
            // Si el archivo no existe en la carpeta, lo eliminamos de la base de datos
            $aplicacion->delete();
        }
    }

    $this->info('Archivos eliminados correctamente.');
}

}
