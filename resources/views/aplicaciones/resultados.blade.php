<x-app-layout>
    <!-- Enlaces CSS y Scripts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Contenido de la página de Listar Aplicaciones -->
    <div style="background: url('{{ asset('imagenes/f.png') }}') no-repeat center center fixed; background-size: cover; overflow: hidden; margin: 0; color: white; height: 100vh; position: relative;">
        <div style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0, 0, 0, 0.5);">
            <div class="container py-12" style="margin-top: 50px; width: 95%; max-width: 1500px; border: none; border-radius: 8px; padding: 20px;">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card" style="border-radius: 15px; margin-bottom: 20px; background-color: #ffffff00;">
                            <div class="card-header" style="color: white;">Todas las Aplicaciones</div>

                            <div class="card-body d-flex flex-wrap">
                                @foreach($resultados as $resultado)
                                    <div class="card mb-3 mx-2 text-center" style="width: calc(30% - 90px); border-radius: 15px; background-color: #000000;">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/'.$resultado->imagen) }}" class="card-img-top img-thumbnail" alt="..." style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover; margin: 0 auto; display: block;">
                                            <h5 class="card-title" style="color: white;">{{ $resultado->nombre }}</h5>
                                            <p class="card-text" style="color: white;">{{ $resultado->descripcion_corta }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ url('/descargar-aplicacion/'.$resultado->id) }}" class="btn btn-primary btn-custom">Descargar</a>
                                                <a href="#" class="more-info" data-toggle="modal" data-target="#modalInfo{{ $resultado->id }}" style="color: #4DA88C;">Más Información</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal de Información -->
                                    <div class="modal fade" id="modalInfo{{ $resultado->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="background-color: #141414; color: white;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Más Información</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('imagenes/'.$resultado->imagen) }}" class="card-img-top img-thumbnail" alt="..." style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover; margin: 0 auto; display: block;">
                                                    <h5 class="card-title">{{ $resultado->nombre }}</h5>
                                                    <p class="card-description">{{ $resultado->descripcion_larga }}</p>
                                                    <p class="card-text">Peso: {{ $resultado->peso }} MB</p>
                                                    <p class="card-target-audience">
                                                        Público Dirigido:
                                                        @if($resultado->preescolar) Preescolar; @endif
                                                        @if($resultado->primaria) Primaria; @endif
                                                        @if($resultado->secundaria) Secundaria; @endif
                                                        @if($resultado->preparatoria) Preparatoria; @endif
                                                        @if($resultado->educacion_especial) Educación Especial; @endif
                                                    </p>
                                                    <p class="card-target-categories">
                                                        Categoría:
                                                        @if($resultado->lectura === '1') Lectura; @endif
                                                        @if($resultado->matematicas === '1') Matemáticas; @endif
                                                        @if($resultado->geografia === '1') Geografía; @endif
                                                        @if($resultado->competencias_basicas === '1') Competencias Básicas; @endif
                                                        @if($resultado->escritura === '1') Escritura; @endif
                                                        @if($resultado->realidad_virtual === '1') Realidad Virtual; @endif
                                                        @if($resultado->entretenimiento === '1') Entretenimiento; @endif
                                                    </p>

                                                    <span class="text-muted">Descargas: {{ $resultado->descargas }}</span>
                                                </div>
                                                <a href="{{ url('/descargar-aplicacion/'.$resultado->id) }}.apk" class="btn btn-primary float-right mt-3">Descargar</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>
