<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: white;
            margin: 0;
            overflow: hidden;
            background: url('{{ asset("imagenes/f.png") }}') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            margin-top: 50px;
            border: none; /* Elimina el borde del contenedor */
            background: rgba(255, 255, 255, 0.1); /* Agrega un fondo desvanecido */
            border-radius: 8px;
            padding: 20px;
        }

        .card {
            border: none; /* Elimina el borde de la tarjeta */
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.7); /* Fondo oscuro semi-transparente */
        }

        .card-header {
            background-color: #4DA88C; /* Color verde */
            font-weight: bold;
            text-transform: uppercase; /* Convierte el texto a mayúsculas */
        }

        .card-body {
            padding: 20px;
        }

        .btn {
            margin-right: 10px;
            padding: 14px 28px;
            border-radius: 20px;
            background-color: #4DA88C; /* Color verde unificado */
            border: 2px solid #4DA88C; /* Borde del mismo color */
            color: white;
            transition: transform 0.2s ease-in-out; /* Agrega transición a la propiedad de transformación */
        }

        .btn:hover {
            transform: scale(1.05); /* Aumenta el tamaño al pasar el mouse sobre el botón */
        }

        .page-description {
            margin-top: 20px;
            display: flex;
            align-items: center;
            text-align: left;
        }

        .page-description p {
            flex: 1;
            margin-right: 20px;
            font-size: 20px;
            color: white; /* Texto blanco */
        }

        .page-description h2,
        .page-description h3 {
            overflow: hidden;
            white-space: nowrap;
            margin: 0;
            font-size: 28px;
            margin-bottom: 10px;
            color: #4DA88C; /* Color verde */
        }

        .page-description h2::after,
        .page-description h3::after {
            content: "|";
            display: inline-block;
            animation: blink 1s infinite;
            color: #4DA88C; /* Color verde */
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        .page-description img {
            max-width: 100%;
            height: auto;
            flex-shrink: 0;
            border-radius: 8px;
        }

        .buttons-container {
            margin-top: 20px;
            text-align: center;
        }

        .text-bar {
            margin-top: 20px;
            background-color: #4DA88C; /* Color verde */
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            color: white;
        }

        .text-bar h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: white;
        }

        .text-bar p {
            font-size: 18px;
            color: white;
        }

        .category-section {
            margin-top: 20px;
            text-align: center;
        }

        .category-section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #4DA88C; /* Color verde */
        }

        .category-images {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .category-images div {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .category-images img {
            max-width: 100%;
            height: 150px;
            margin-bottom: 10px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .category-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(77, 168, 140, 0.8); /* Fondo desvanecido del texto */
            padding: 5px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .category-images div:hover img {
            transform: scale(1.1);
        }

        .category-images div:hover .category-caption {
            opacity: 1;
        }

        .footer {
            text-align: center;
            color: white;
            margin-top: 20px;
        }
        body {
    overflow-y: auto;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                   

                    <div class="card-body">
                        <div class="page-description">
                            <div>
                                <h2 id="title">APLICACIONES EDUCATIVAS CIMAT</h2>
                                <h3 id="subtitle"><strong>Descarga aplicaciones educativas de manera gratuita</strong></h3>
                                <p id="content">Explora nuestro repositorio de aplicaciones educativas diseñadas para
                                    transformar el aprendizaje en una experiencia inmersiva y enriquecedora. Desde
                                    matemáticas, lectura, geografía y hasta escritura, nuestras aplicaciones utilizan la
                                    realidad virtual para ofrecer entornos interactivos que despiertan la curiosidad,
                                    fomentan la participación y facilitan el aprendizaje de manera divertida. Descubre un
                                    mundo de conocimiento a través de experiencias educativas innovadoras que inspiran el
                                    amor por el aprendizaje en estudiantes de todas las edades. ¡Sumérgete en la educación
                                    del futuro con nuestras aplicaciones educativas de RV!</p><br><br>
                                <div class="buttons-container">
                                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                                    <a href="{{ route('register') }}" class="btn btn-success">Registrarse</a>
                                </div>
                            </div>
                            <img src="{{ asset('imagenes/lectura.png') }}" alt="Descripción de la imagen">
                        </div>

                        <div class="text-bar">
                            <h2>Nuestras Categorías</h2>
                            <p>Explora nuestras diversas categorías y sumérgete en el aprendizaje a través de
                                experiencias únicas en cada disciplina.</p>
                        </div>

                        <!-- Nuevas secciones agregadas -->
                        <div class="category-section">
                            <h2 style="color: #4DA88C;">Categorías</h2>
                            <div class="category-images">
                                <div onclick="location.href='{{ route('register') }}';">   
                                    <img src="{{ asset('imagenes/vr.png') }}" alt="Realidad Virtual">
                                    <p class="category-caption">Realidad Virtual</p>
                                </div>
                                <div onclick="location.href='{{ route('register') }}';">
                                    <img src="{{ asset('imagenes/control.png') }}" alt="Entretenimiento">
                                    <p class="category-caption">Entretenimiento</p>
                                </div>
                                <div onclick="location.href='{{ route('register') }}';">
                                    <img src="{{ asset('imagenes/mat.png') }}" alt="Matemáticas">
                                    <p class="category-caption">Matemáticas</p>
                                </div>
                                <div onclick="location.href='{{ route('register') }}';">
                                    <img src="{{ asset('imagenes/geo.png') }}" alt="Geografía">
                                    <p class="category-caption">Geografía</p>
                                </div>
                                <div onclick="location.href='{{ route('register') }}';">
                                    <img src="{{ asset('imagenes/esc.png') }}" alt="Escritura">
                                    <p class="category-caption">Escritura</p>
                                </div>
                                <div onclick="location.href='{{ route('register') }}';">
                                    <img src="{{ asset('imagenes/das.jpg') }}" alt="Competencias Básicas">
                                    <p class="category-caption">Competencias Básicas</p>
                                </div>
                                <div onclick="location.href='{{ route('register') }}';">
                                    <img src="{{ asset('imagenes/lec.png') }}" alt="Lectura">
                                    <p class="category-caption">Lectura</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <p>Derechos Reservados &copy; Osiel Mauricio Pérez Juárez</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Función para el efecto de escritura automática
        function typeWriter(text, targetId, speed) {
            let i = 0;
            const targetElement = document.getElementById(targetId);
            targetElement.innerHTML = ''; // Limpia el contenido actual
            const interval = setInterval(function () {
                if (i < text.length) {
                    targetElement.innerHTML += text.charAt(i);
                    i++;
                } else {
                    clearInterval(interval);
                }
            }, speed);
        }

        // Texto para efecto de escritura automática
        const titleText = "APLICACIONES EDUCATIVAS CIMAT";
        const subtitleText = "Descarga aplicaciones educativas de manera gratuita";
        const contentText =
            "Explora nuestro repositorio de aplicaciones educativas diseñadas para transformar el aprendizaje en una experiencia inmersiva y enriquecedora. Desde matemáticas hasta lectura, geografía y escritura, nuestras aplicaciones utilizan la realidad virtual para ofrecer entornos interactivos que despiertan la curiosidad, fomentan la participación y facilitan el aprendizaje de manera divertida. Descubre un mundo de conocimiento a través de experiencias educativas innovadoras que inspiran el amor por el aprendizaje en estudiantes de todas las edades. ¡Sumérgete en la educación del futuro con nuestras aplicaciones educativas de RV!";

        // Inicia el efecto de escritura automática
        typeWriter(titleText, "title", 100);
        typeWriter(subtitleText, "subtitle", 100);
        typeWriter(contentText, "content", 20);
    </script>
</body>

</html>
