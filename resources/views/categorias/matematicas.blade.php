<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

   <!-- Contenido de la página de Listar Aplicaciones -->
   <div style="background: url('{{ asset('imagenes/f.png') }}') no-repeat center center fixed; background-size: cover; overflow: hidden; margin: 0; color: white;height: 100vh;">
        <div class="container py-12" style="margin-top: 50px; width: 95%; max-width: 1500px; border: none; background: rgba(0, 0, 0, 0.5); border-radius: 8px; padding: 20px;">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="border-radius: 15px; margin-bottom: 20px; background-color: #ffffff00;">
                        <div class="card-header" style="color: white;">Matemáticas</div>

                        <div class="card-body d-flex flex-wrap">
                            @foreach($aplicaciones as $aplicacion)
                                <div class="card mb-3 mx-2 text-center" style="width: calc(30% - 90px); border-radius: 15px; background-color: #000000;">
                                    <div class="card-body">
                                        <img src="{{ asset('imagenes/'.$aplicacion->imagen) }}" class="card-img-top img-thumbnail" alt="..." style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover; margin: 0 auto; display: block;">
                                        <h5 class="card-title" style="color: white;">{{ $aplicacion->nombre }}</h5>
                                        <p class="card-text" style="color: white;">{{ $aplicacion->descripcion_corta }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ url('/descargar-aplicacion/'.$aplicacion->id) }}" class="btn btn-primary btn-custom">Descargar</a>
                                            
                                            @if(auth()->user()->email === 'cimat@gmail.com')
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarAplicacion{{ $aplicacion->id }}">Eliminar</button>
                                            @endif

                                            <!-- Modal de Confirmación para Eliminar Aplicación -->
<div class="modal fade" id="eliminarAplicacion{{ $aplicacion->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #ffffff; color: #000000;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar esta aplicación? 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <!-- Enlace para eliminar la aplicación -->
                <a href="{{ route('eliminar-aplicacion', $aplicacion->id) }}" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>

                                            <a href="#" class="more-info" data-toggle="modal" data-target="#modalInfo{{ $aplicacion->id }}" style="color: #4DA88C;">Más Información</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal de Información -->
                                <div class="modal fade" id="modalInfo{{ $aplicacion->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="background-color: #141414; color: white;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Más Información</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('imagenes/'.$aplicacion->imagen) }}" class="card-img-top img-thumbnail" alt="..." style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover; margin: 0 auto; display: block;">
                                                <h5 class="card-title">{{ $aplicacion->nombre }}</h5>
                                                <p class="card-description">{{ $aplicacion->descripcion_larga }}</p>
                                                <p class="card-text">Peso: {{ $aplicacion->peso }} MB</p>
                                                <p class="card-target-audience">
                                                    Público Dirigido:
                                                    @if($aplicacion->preescolar) Preescolar; @endif
                                                    @if($aplicacion->primaria) Primaria; @endif
                                                    @if($aplicacion->secundaria) Secundaria; @endif
                                                    @if($aplicacion->preparatoria) Preparatoria; @endif
                                                    @if($aplicacion->educacion_especial) Educación Especial; @endif
                                                </p>
                                                <p class="card-target-categories">
                                                    Categoría:
                                                    @if($aplicacion->lectura === '1') Lectura; @endif
                                                    @if($aplicacion->matematicas === '1') Matemáticas; @endif
                                                    @if($aplicacion->geografia === '1') Geografía; @endif
                                                    @if($aplicacion->competencias_basicas === '1') Competencias Básicas; @endif
                                                    @if($aplicacion->escritura === '1') Escritura; @endif
                                                    @if($aplicacion->realidad_virtual === '1') Realidad Virtual; @endif
                                                    @if($aplicacion->entretenimiento === '1') Entretenimiento; @endif
                                                </p>

                                                <span class="text-muted">Descargas: {{ $aplicacion->descargas }}</span>
                                            </div>
                                            <a href="{{ url('/descargar-aplicacion/'.$aplicacion->id) }}.apk" class="btn btn-primary float-right mt-3">Descargar</a>
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

    <!-- Scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>
