<x-app-layout>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css" rel="stylesheet">

    <div style="background: url('{{ asset('imagenes/f.png') }}') no-repeat center center fixed; background-size: cover; overflow: hidden; margin: 0; color: white; height: 100vh;">
        <div class="container mt-5" style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 8px;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Subir Aplicación</div>

                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ url('/subir-apk') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="archivo" class="form-label text-white">Archivo .apk</label>
                                    <input type="file" class="form-control" id="archivo" name="archivo" accept=".apk" required style="background-color: rgba(255, 255, 255, 0.1); color: white;">
                                </div>

                                <div class="mb-3">
                                    <label for="nombre" class="form-label text-white">Nombre de la Aplicación</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required style="background-color: rgba(255, 255, 255, 0.1); color: white;">
                                </div>

                                <div class="mb-3">
                                    <label for="descripcion" class="form-label text-white">Descripción Corta (máx. 50 caracteres)</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion_corta" maxlength="50" required oninput="checkLength(this)" style="background-color: rgba(255, 255, 255, 0.1); color: white;"></textarea>
                                </div>

                            <div class="mb-3">
                                <label for="descripcion_larga" class="form-label">Descripción Larga (máx. 250 caracteres)</label>
                                <textarea class="form-control" id="descripcion" name="descripcion_larga" maxlength="250" required oninput="checkLength(this)" style="background-color: rgba(255, 255, 255, 0.1); color: white;"></textarea>
                                </div>
                            
                            <div class="mb-3">
                                <label for="peso" class="form-label">Peso (MB)</label>
                                <input type="text" class="form-control" id="peso" name="peso" required style="background-color: rgba(255, 255, 255, 0.1); color: white;">
                            </div>

                            
                                
                            <div class="mb-3">
    <label class="form-check-label">Público Dirigido (Puede seleccionar más de uno)</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="preescolar" name="publico_dirigido[]" value="preescolar">
        <label class="form-check-label" for="preescolar">Preescolar</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="primaria" name="publico_dirigido[]" value="primaria">
        <label class="form-check-label" for="primaria">Primaria</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="secundaria" name="publico_dirigido[]" value="secundaria">
    <label class="form-check-label" for="secundaria">Secundaria</label>
</div>

<div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="preparatoria" name="publico_dirigido[]" value="preparatoria">
    <label class="form-check-label" for="preparatoria">Preparatoria</label>
</div>

<div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="educacion_especial" name="publico_dirigido[]" value="educacion_especial">
    <label class="form-check-label" for="educacion_especial">Educación Especial</label>
</div>

    
    <!-- Repite el bloque anterior para las demás opciones -->
</div>


<div class="mb-3">
    <label class="form-check-label">Categoría (Puede seleccionar más de una)</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="lectura" name="categoria[]" value="lectura">
        <label class="form-check-label" for="lectura">Lectura</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="matematicas" name="categoria[]" value="matematicas">
        <label class="form-check-label" for="matematicas">Matemáticas</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="geografia" name="categoria[]" value="geografia">
        <label class="form-check-label" for="geografia">Geografía</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="competencias_basicas" name="categoria[]" value="competencias_basicas">
        <label class="form-check-label" for="competencias_basicas">Competencias Básicas</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="escritura" name="categoria[]" value="escritura">
        <label class="form-check-label" for="escritura">Escritura</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="realidad_virtual" name="categoria[]" value="realidad_virtual">
        <label class="form-check-label" for="realidad_virtual">Realidad Virtual</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="entretenimiento" name="categoria[]" value="entretenimiento">
        <label class="form-check-label" for="entretenimiento">Entretenimiento</label>
    </div>
</div>


                            <div class="mb-3">
                                <label for="imagen" class="form-label">Icono de la app</label>
                                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required style="background-color: rgba(255, 255, 255, 0.1); color: white;">
                                </div>

                                <button type="submit" class="btn btn-primary">Subir Aplicación</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('archivo').addEventListener('change', function() {
            const archivoInput = document.getElementById('archivo');
            const nombreInput = document.getElementById('nombre');

            const nombre = archivoInput.files[0].name.replace('.apk', '');
            nombreInput.value = nombre;
        });

        document.getElementById('archivo').addEventListener('change', function() {
            const fileSize = this.files[0].size;
            const fileSizeInMB = fileSize / (1024 * 1024);
            const pesoInput = document.getElementById('peso');
            pesoInput.value = fileSizeInMB.toFixed(2);
        });
    </script>
</x-app-layout>




