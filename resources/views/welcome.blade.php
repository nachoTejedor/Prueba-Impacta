<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="/css/index.css">
    <title>Document</title>
</head>
<body>
        <div class="publi">
            <p>MÁS PUBLICIDAD! <strong>SUBSCRÍBETE A NUESTRA NEWSLETTER</strong></p>
            <p class="link"><a href="">Clic aquí</a></p>
        </div>
    <div class="header">
        <div class="image">
            <img src="{{ asset('/img/logos/impacta.svg') }}" alt="Descripción de la imagen">
        </div>
        <nav class="menu-header">
            <ul>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <div class="redes">
            <img src="{{ asset('/img/logos/Recurso.svg') }}" alt="Descripción de la imagen" class="menu-icon">
        </div>
    </div>

<!-- Slider -->
<div class="container-slider w-full relative h-64"> <!-- Añade la clase h-64 para ajustar la altura -->
    <div class="slider relative w-full overflow-hidden h-full">
        <!-- Degradado -->
        <div class="degradado absolute inset-0"></div>

        <!-- Imágenes del slider -->
        <div class="slider-inner flex transition-transform duration-500 ease-in-out h-full">
            <img src="{{ asset('img/slider/edit 1 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 1" id="imgSlider">
            <img src="{{ asset('img/slider/edit 2 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 2" id="imgSlider">
            <img src="{{ asset('img/slider/edit 3 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 3" id="imgSlider">
            <img src="{{ asset('img/slider/edit 4 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 4" id="imgSlider">
        </div>
    </div>
    <!-- Texto superpuesto -->
    <p class="textoSuperpuesto absolute top-1/2 left-10 text-white text-4xl md:text-8xl font-bold bg-black bg-opacity-0 p-4 w-full md:w-1/4 transform -translate-y-1/2">
        A veces, somos gente normal
    </p>
    <!-- Controles de navegación en forma de círculos -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <div class="circle bg-white w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(0)"></div>
        <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(1)"></div>
        <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(2)"></div>
        <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(3)"></div>
    </div>
</div>

    <!-- Incluir el selector de servicios -->
    <section id="servicios" class="servicios">
    <div class="container">
        <div class="servicio">
            <img src="{{ asset('/img/images/salud-mental.svg') }}" alt="Ideas" class="imgOver">
            <div class="imgWrapperContainer">
                <div class="redOver"></div>
                <img src="{{ asset('/img/images/brain.jpg') }}" alt="Creatividad" class="imgWrapper">
            </div>
            <h2 class="titulo">Creatividad sin límites</h2>
            <p class="descripcion">Transformamos ideas en <strong>experiencias inolvidables</strong>, creando campañas que capturan la esencia de tu marca.</p>
        </div>
        <div class="servicio">
            <img src="{{ asset('/img/images/esperma.svg') }}" alt="Ideas" class="imgOver">
            <div class="imgWrapperContainer">
            <div class="redOver"></div>
            <img src="{{ asset('/img/images/dard.jpg') }}" alt="Agilidad" class="imgWrapper">
            </div>
            <h2 class="titulo">Agilidad y eficiencia</h2>
            <p class="descripcion"><strong>Respuesta rápida y eficiente</strong> para un mercado en constante cambio.</p>
        </div>
        <div class="servicio">
            <img src="{{ asset('/img/images/chincheta.svg') }}" alt="Ideas" class="imgOver">
            <div class="imgWrapperContainer">
            <div class="redOver"></div>
            <img src="{{ asset('/img/images/women.jpg') }}" alt="Tecnología" class="imgWrapper">
            </div>
            <h2 class="titulo">Tecnología avanzada</h2>
            <p class="descripcion">Aplicamos la <strong>última tecnología</strong> para ofrecer soluciones innovadoras.</p>
        </div>
        <div class="servicio">
            <img src="{{ asset('/img/images/jarro-de-cerveza.svg') }}" alt="Ideas" class="imgOver">
 <div class="imgWrapperContainer">
 <div class="redOver"></div>
            <img src="{{ asset('/img/images/hands.jpg') }}" alt="Expertos" class="imgWrapper">
            </div>
            <h2 class="titulo">Equipo de expertos</h2>
            <p class="descripcion">Contamos con un <strong>equipo de profesionales</strong> altamente capacitados.</p>
        </div>
    </div>
</section>
@include('bannerEmpresas')
<div class="publiWhite">
            <p>MÁS PUBLICIDAD! <strong>SUBSCRÍBETE A NUESTRA NEWSLETTER</strong></p>
            <p class="link"><a href="">Clic aquí</a></p>
        </div>
</body>
<script src="/js/animations.js"></script>
<script src="/js/slider.js"></script>
</html>
