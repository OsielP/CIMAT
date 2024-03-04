<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
    </x-slot>
    <!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: white;
            margin: 0;
            overflow: hidden;
            background: url('{{ asset("imagenes/p.png") }}') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            margin-top: 50px;
            border: none;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.7);
        }

        .card-header {
            background-color: #4DA88C;
            font-weight: bold;
            text-transform: uppercase;
        }

        .card-body {
            padding: 20px;
        }

        .btn {
            margin-right: 10px;
            padding: 14px 28px;
            border-radius: 20px;
            background-color: #4DA88C;
            border: 2px solid #4DA88C;
            color: white;
            transition: transform 0.2s ease-in-out;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .text-bar {
            margin-top: 20px;
            background-color: #4DA88C;
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

        .footer {
            text-align: center;
            color: white;
            margin-top: 20px;
        }

        .about-section {
            margin-top: 20px;
            text-align: center;
        }

        .about-section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #4DA88C;
        }

        .creator-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .creator-card {
            border: none;
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            width: 45%;
        }

        .creator-card img {
            max-width: 80px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .creator-info {
            text-align: left;
            color: white;
            margin-top: 20px;
        }

        .creator-info h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #4DA88C;
        }

        .creator-info a {
            color: #4DA88C;
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
                        <div class="text-bar">
                            <h2>Conoce a los Creadores</h2>
                            <p>Descubre más sobre los ingenieros detrás de esta plataforma educativa.</p>
                        </div>

                        <div class="about-section">
                            <h2>Equipo de Desarrollo</h2>
                            <div class="creator-container">
                                <div class="creator-card">
                                    <img src="{{ asset('imagenes/osiel.jpg') }}" alt="Osiel Mauricio Pérez Juárez">
                                    <div class="creator-info">
                                        <h3>Osiel Mauricio Pérez Juárez</h3>
                                        <p>Ingeniero en Sistemas Computacionales</p>
                                        <p><a href="https://osielp.github.io/Mi-Portafolio/">Portafolio</a></p>
                                    </div>
                                </div>
                                <div class="creator-card">
                                    <img src="{{ asset('imagenes/hector.jpg') }}" alt="Hector Daniel Castro Salazar">
                                    <div class="creator-info">
                                        <h3>Hector Daniel Castro Salazar</h3>
                                        <p>Ingeniero en Sistemas Computacionales</p>
                                        <p><a href="https://hector-daniel-castro.github.io/portafolio/">Portafolio</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-section">
                            <h2>Supervisores de Proyecto</h2>
                            <div class="creator-container">
                                <div class="creator-card">
                                    <img src="{{ asset('imagenes/hec.jpeg') }}" alt="Docente Hector Carnoda Reyes">
                                    <div class="creator-info">
                                        <h3>Docente Hector Carnoda Reyes</h3>
                                        <p>El Dr. Héctor Cardona realizo la Licenciatura (Pregrado) y Maestría en Ciencias de la 
                                            Computación en la Universidad Autónoma de Aguascalientes. Realizo su doctorado en Ciencias 
                                            de la Computación en la Universidad Juárez Autónoma de Tabasco. Tiene experiencia en aplicaciones 
                                            móviles, ingeniería web, diseño de videojuegos y realidad virtual. Desde 2019 es Catedrático CONAHCyT 
                                            comisionado al Centro de Investigación en Matemáticas en la Unidad Zacatecas. Adicionalmente, 
                                            es miembro del Sistema Nacional de Investigadores de CONAHCyT en el nivel 2.</p>
                                        <!-- Agrega más información según sea necesario -->
                                    </div>
                                </div>
                                <div class="creator-card">
                                    <img src="{{ asset('imagenes/doc_miguel.jpg') }}" alt="Docente Miguel Ortiz">
                                    <div class="creator-info">
                                        <h3>Docente Miguel Ortiz</h3>
                                        <p>Área de Especialidad</p>
                                        <!-- Agrega más información según sea necesario -->
                                    </div>
                                </div>
                                <div class="creator-card">
                                    <img src="{{ asset('imagenes/toñ.jpeg') }}" alt="Ing. Jose Antonio Flores Lara">
                                    <div class="creator-info">
                                        <h3>Ing. Jose Antonio Flores Lara</h3>
                                        <p>El distinguido profesor José Antonio Flores Lara ejerce su labor docente en el Instituto 
                                            Tecnológico Superior Zacatecas Occidente, acumulando más de dos décadas de experiencia. 
                                            Poseedor de un destacado perfil como ingeniero en sistemas, comparte sus vastos conocimientos 
                                            con singular entusiasmo con todos los estudiantes a su cargo.</p>
                                        <!-- Agrega más información según sea necesario -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin de la nueva sección -->
                    </div>
                </div>
                <div class="footer">
    <p>Derechos Reservados &copy; Osiel Mauricio Pérez Juárez</p>

    <div style="display: flex; justify-content: center; align-items: center;">
    <!-- Mapa de CIMAT Zacatecas -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.4674325756023!2d-102.6161731247495!3d22.78513737934085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824e94ce41da01%3A0x1ee2e106df5231a8!2sCIMAT%20Zacatecas%20Centro%20de%20Investigaci%C3%B3n%20en%20Matem%C3%A1ticas!5e0!3m2!1ses-419!2smx!4v1706427178641!5m2!1ses-419!2smx" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Imagen CIM.jpg -->
    <img src="{{ asset('imagenes/CIM.jpg') }}" alt="CIM" width="800" height="600">
</div>


<div>
    <h4>Síguenos en redes sociales:</h4>
    <a href="https://www.facebook.com/CIMATMX" target="_blank">
        <i class="fab fa-facebook"></i> Facebook
    </a> |
    <a href="https://twitter.com/CIMATMX" target="_blank">
        <i class="fab fa-twitter"></i> Twitter
    </a> |
    <a href="https://www.linkedin.com/company/cimat/" target="_blank">
        <i class="fab fa-linkedin"></i> LinkedIn
    </a>
</div>

</div>
</div>
</div>
</div>
</x-app-layout>
