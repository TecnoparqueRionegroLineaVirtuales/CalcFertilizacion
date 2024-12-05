<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Proyecto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-white via-green-100 to-white bg-fixed min-h-screen">
    <!-- Navegación -->
    <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto px-6 lg:px-20 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center justify-start">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-36"> <!-- Logo más grande -->
            </div>
            <!-- Enlaces -->
            <div class="space-x-6 text-gray-600">
                <a href="{{ route('homeGuest') }}" class="hover:text-gray-800">Inicio</a>
                <a href="{{ route('frontend.user.info') }}" class="hover:text-gray-800">¿Qué es la fertilización?</a>
                <a href="{{ route('frontend.user.parameterCalculator') }}" class="hover:text-gray-800">Calculadora de fertilización</a>
                <!-- Botón de inicio de sesión -->
                <a href="https://moodle.fertilizainteligente.com/" class="bg-[#15803D] text-white font-semibold shadow-lg hover:bg-[#13692D] transition px-4 py-2 rounded-lg">
                    Aprende sobre fertilización
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mx-auto px-6 lg:px-20 py-24 mt-36 fade-in">
        <!-- Título -->
        <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Información del Proyecto</h1>
        <p class="text-lg text-gray-700 text-center mb-12">
            Este proyecto tiene como objetivo proporcionar herramientas innovadoras para la optimización del uso de fertilizantes, mejorando la calidad de los cultivos y contribuyendo a la sostenibilidad ambiental. A través de nuestra calculadora de fertilización, los agricultores pueden calcular los requerimientos específicos de nutrientes para sus suelos, optimizando el rendimiento y reduciendo el impacto negativo de fertilizantes en el medio ambiente.
        </p>
        
        <!-- Sección de fotos y texto -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Bloque 1 -->
            <div class="flex flex-col justify-center">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Nuestra Misión</h2>
                <p class="text-gray-700 mb-6">
                    Proveer herramientas innovadoras para optimizar el uso de fertilizantes, mejorando la calidad de los cultivos y reduciendo el impacto ambiental.
                </p>
                <img src="{{ asset('img/1.jpg') }}" alt="Foto misión" class="rounded-lg shadow-md">
            </div>
            
            <!-- Bloque 2 -->
            <div class="flex flex-col justify-center">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Nuestra Visión</h2>
                <p class="text-gray-700 mb-6">
                    Ser líderes en tecnología agrícola, transformando la forma en que los agricultores gestionan los nutrientes de sus suelos.
                </p>
                <img src="{{ asset('img/2.jpg') }}" alt="Foto visión" class="rounded-lg shadow-md">
            </div>
        </div>

        <!-- Sección extra de fotos -->
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <img src="{{ asset('img/3.jpg') }}" alt="Foto 1" class="rounded-lg shadow-md">
            <img src="{{ asset('img/4.jpg') }}" alt="Foto 2" class="rounded-lg shadow-md">
            <img src="{{ asset('img/5.jpg') }}" alt="Foto 3" class="rounded-lg shadow-md">
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow-md text-black text-center fixed bottom-0 left-0 w-full py-2">
        <p class="text-xs">&copy; 2024 Tecnoparque Rionegro. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
