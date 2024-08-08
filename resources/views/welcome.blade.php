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
    <header>
        <div class="publi">
            <p>MÁS PUBLICIDAD! <strong>SUBSCRÍBETE A NUESTRA NEWSLETTER</strong></p>
            <p class="link"><a href="">Clic aquí</a></p>
        </div>
    </header>
    <div class="menu-header">
        <div class="image">
            <img src="{{ asset('img/logos/Recurso 13.svg') }}" alt="Descripción de la imagen">
        </div>
    </div>
  <!-- Slider -->
  <div class="container-slider w-full h-80 relative"> <!-- Añadir "relative" aquí -->
        <div class="slider relative w-full overflow-hidden">
            <!-- Degradado -->
            <div class="degradado absolute inset-0"></div>

            <!-- Imágenes del slider -->
            <div class="slider-inner flex transition-transform duration-500 ease-in-out h-full">
                <img src="{{ asset('img/slider/edit 1 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 1">
                <img src="{{ asset('img/slider/edit 2 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 2">
                <img src="{{ asset('img/slider/edit 3 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 3">
                <img src="{{ asset('img/slider/edit 4 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 4">
            </div>
        </div>

        <!-- Texto superpuesto -->
        <p class="textoSuperpuesto absolute top-80 left-10 text-white text-8xl font-bold bg-black bg-opacity-0 p-4 w-1/4 texto-superpuesto">
            A veces, somos gente normal
        </p>
    </div>


    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.slider-inner img');
        const totalImages = images.length;
        function showNextImage() {
            currentIndex = (currentIndex + 1) % totalImages;
            const offset = -currentIndex * 100;
            document.querySelector('.slider-inner').style.transform = `translateX(${offset}%)`;
        }

        setInterval(showNextImage, 5000); // Cambia de imagen cada 5 segundos
    </script>
</body>
</html>
