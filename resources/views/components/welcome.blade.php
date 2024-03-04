<!DOCTYPE html>
<html>
<head>
<style>

  

    /* Estilo del slider */
    .slider {
      width: 100%;
      overflow: hidden; /* Recortará las imágenes que excedan el ancho */
      position: relative;
    }

    /* Estilo de cada slide */
    .slide {
      width: 100%;
      display: none;
      position: relative;
    }

    .slide img {
      width: 100%; /* Ajustar el ancho de la imagen al 100% del contenedor */
      height: auto; /* Esto mantendrá la relación de aspecto y ajustará la altura automáticamente */
    }

    /* Estilo del degradado oscuro y texto */
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)); /* Degradado oscuro */
      display: flex;
      flex-direction: column; /* Alinea el texto verticalmente */
      justify-content: flex-start; /* Alinea el texto al principio */
      align-items: flex-start; /* Alinea el texto a la izquierda */
      color: white;
      text-align: left; /* Alineación del texto a la izquierda */
      opacity: 0;
      transition: opacity 0.5s ease;
      padding: 20px; /* Espaciado interno para el texto */
    }

    .overlay p {
      font-weight: bold; /* Texto en negritas */
      font-size: 24px; /* Tamaño del título */
      margin-bottom: 6px; /* Espacio entre el título y el subtítulo */
    }

    .overlay span {
      font-size: 18px; /* Tamaño del subtítulo */
    }

    .slide:hover .overlay {
      opacity: 0.8;
    }

    /* Estilo para las flechas dentro del slide */
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      background-color: rgba(0, 0, 0, 0);
      color: white;
      font-size: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: background-color 0.3s ease;
      z-index: 1;
    }

    .arrow:hover {
      background-color: rgba(0, 0, 0, 0.2);
    }

    .prev {
      left: 10px;
    }

    .next {
      right: 10px;
    }
  </style>
</head>
<body>
  
  <div class="slider">
      <div class="slide">
        <img src="https://d3x4s9v8.rocketcdn.me/wp-content/uploads/2022/08/Experiencias-Sensoriales.jpg" alt="Imagen 1">
        <div class="overlay">
          <p>Explora nuevos conocimientos con Realidad virtual</p>
          <span>Aplicaciones que te ayudarán a fortalecer o adquirir conocimientos de una manera diferente y llamativa</span>
        </div>
        <div class="arrow prev" onclick="prevSlide(0)">&#8249;</div>
        <div class="arrow next" onclick="nextSlide(0)">&#8250;</div>
      </div>
      <div class="slide">
        <img src="https://cientificamentemisiones.files.wordpress.com/2019/10/201910_014.jpg?w=1280&h=400&crop=1" alt="Imagen 2">
        <div class="overlay">
          <p>Sumergete en una aventura nueva</p>
          <span>Con historias espectaculares en las aplicaciones de lectura</span>
        </div>
        <div class="arrow prev" onclick="prevSlide(1)">&#8249;</div>
        <div class="arrow next" onclick="nextSlide(1)">&#8250;</div>
      </div>
      <div class="slide">
        <img src="https://quovix.com/wp-content/uploads/2021/02/header-bg-reflex.jpg" alt="Imagen 3">
        <div class="overlay">
          <p>La practica hace al maestro</p>
          <span>Aprende con las diversas aplicaciones de escritura para fortalecer tus habilidades</span>
        </div>
        <div class="arrow prev" onclick="prevSlide(2)">&#8249;</div>
        <div class="arrow next" onclick="nextSlide(2)">&#8250;</div>
      </div>
  </div>

  <script>
  const slides = document.querySelectorAll('.slide');
  let slideIndex = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      if (i === index) {
        slide.style.display = 'block';
      } else {
        slide.style.display = 'none';
      }
    });
  }

  function nextSlide() {
    slideIndex = (slideIndex + 1) % slides.length;
    showSlide(slideIndex);
  }

  function prevSlide() {
    slideIndex = (slideIndex - 1 + slides.length) % slides.length;
    showSlide(slideIndex);
  }

  // Función para cambiar de slide cada  segundos
  function startSlider() {
    setInterval(() => {
      nextSlide();
    }, 5000); // Cambia de slide cada 3 segundos (3000 milisegundos)
  }

  // Mostrar el primer slide al cargar la página
  showSlide(0);

  // Iniciar el slider automáticamente al cargar la página
  startSlider();
</script>

</body>
</html>
</body>
</html>

<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Bienvenido al Repositorio de aplicaciones para la educación básica
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Aquí podrás descargar una lista muy amplia de aplicaciones de diversas categorías. Pudiendo centrarse en la educación como en la diversión.
        Clasificadas según la necesidad del alumno o maestro en cuestión estas son algunas de nuestras categorías
    </p>
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ url('/categorias/lectura') }}">Lectura</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Las aplicaciones de lectura para la educación son herramientas digitales diseñadas para facilitar y mejorar la experiencia de lectura y el aprendizaje en entornos educativos. Estas aplicaciones abarcan una amplia gama de usos y características, y su objetivo principal es promover la alfabetización,
         el desarrollo de habilidades de lectura y el acceso a contenidos educativos. 
        </p>

        <p class="mt-4 text-sm">
            <a href="{{ url('/categorias/lectura') }}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Explora las aplicaciones de Lectura

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ url('/categorias/realidad_virtual') }}">Realidad Virtual</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Las aplicaciones de realidad virtual (RV) para la educación son herramientas tecnológicas diseñadas para enriquecer y mejorar el proceso de enseñanza y aprendizaje mediante el uso de entornos virtuales inmersivos. Estas aplicaciones aprovechan 
        la RV para proporcionar experiencias educativas más atractivas y efectivas. 
        </p>

        <p class="mt-4 text-sm">
            <a href="{{ url('/categorias/realidad_virtual') }}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Explora las aplicaciones de Realidad Virtual

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
</svg>

            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ url('/categorias/matematicas') }}">Matemáticas</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Las aplicaciones de matemáticas para la educación son herramientas digitales diseñadas para ayudar a los estudiantes a comprender y practicar conceptos matemáticos de manera interactiva y efectiva. Estas aplicaciones abarcan una amplia gama de niveles 
        educativos, desde la educación preescolar hasta la educación superior, y cubren diversos aspectos de las matemáticas.
        </p>

        <p class="mt-4 text-sm">
            <a href="{{ url('/categorias/matematicas') }}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Explora las aplicaciones de Matemáticas

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
</svg>

            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ url('/categorias/geografia') }}">Geografía</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Las aplicaciones de geografía para la educación son herramientas digitales diseñadas para ayudar a los estudiantes a explorar y comprender conceptos geográficos, como ubicaciones geográficas, mapas, climatología y geología, de una manera interactiva y educativa. 
        Estas aplicaciones son útiles para estudiantes de todos los niveles educativos y abarcan una amplia gama de áreas de la geografía.        </p>

        <p class="mt-4 text-sm">
            <a href="{{ url('/categorias/geografia') }}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Explora las aplicaciones de Geografía

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z" />
</svg>


            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ url('/categorias/entretenimiento') }}">Entretenimiento</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Las aplicaciones de entretenimiento ofrecen una amplia gama de experiencias divertidas y atractivas para usuarios de todas las edades. Estas aplicaciones están diseñadas para proporcionar entretenimiento, relajación y diversión.        </p>

        <p class="mt-4 text-sm">
            <a href="{{ url('/categorias/entretenimiento') }}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Explora las aplicaciones de Entretenimiento

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
</svg>


            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ url('/categorias/escritura') }}">Escritura</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Las aplicaciones de escritura son herramientas digitales diseñadas específicamente para apoyar y mejorar la enseñanza y el aprendizaje de la escritura en entornos educativos. Estas aplicaciones están destinadas a estudiantes, maestros y educadores, y ofrecen una serie de características y recursos para fomentar el desarrollo de habilidades de escritura efectiva
        <p class="mt-4 text-sm">
            <a href="{{ url('/categorias/escritura') }}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Explora las aplicaciones de Escritura

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
</svg>



            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ url('/categorias/competencias_basicas') }}">Competencias Básicas</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Las aplicaciones de competencias básicas se enfocan en el fortalecimiento de habilidades fundamentales y esenciales en diversas áreas de la vida. Están diseñadas para ayudar a mejorar competencias clave, como lectura, escritura, matemáticas, habilidades digitales y más.
        <p class="mt-4 text-sm">
            <a href="{{ url('/categorias/competencias_basicas') }}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Explora las aplicaciones de Competencias Básicas

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>  