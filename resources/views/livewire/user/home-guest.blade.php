<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fertilización</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animación personalizada */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-white via-green-100 to-white bg-fixed min-h-screen">

    <!-- Menú de navegación (Sticky) -->
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

    <!-- Contenido principal (con margen superior ajustado para no quedar debajo del menú) -->
    <div class="container mx-auto px-6 lg:px-20 py-24 mt-36 fade-in"> <!-- Se usó mt-36 para dar margen superior -->
        <div class="flex flex-col lg:flex-row items-center justify-center text-center lg:text-left lg:space-x-10">
            <!-- Columna de texto -->
            <div class="lg:w-1/2">
                <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-800 leading-tight mb-6">
                    Calculadora de fertilización<br>
                    <span class="text-[#15803D]">Aplica exactamente lo que tu planta necesita</span>
                </h1>
                <p class="text-lg text-gray-700 mb-6">
                    Optimiza tus cultivos y mejora la calidad del suelo con soluciones precisas y sostenibles.
                </p>
                <ul class="list-none space-y-2 text-gray-700">
                    <li class="flex items-center justify-center lg:justify-start">
                        <span class="text-[#15803D] mr-2">✔</span> Planificación eficiente de nutrientes
                    </li>
                    <li class="flex items-center justify-center lg:justify-start">
                        <span class="text-[#15803D] mr-2">✔</span> Análisis detallado del suelo
                    </li>
                    <li class="flex items-center justify-center lg:justify-start">
                        <span class="text-[#15803D] mr-2">✔</span> Recomendación de nutrientes
                    </li>
                </ul>
                <div class="mt-8 flex justify-center lg:justify-start space-x-4">
                    <a href="{{ route('frontend.user.parameterCalculator') }}" class="px-6 py-3 bg-[#15803D] text-white font-semibold rounded-lg shadow-lg hover:bg-[#13692D] transition">Explorar ahora</a>
                    <a href="{{ route('frontend.user.info') }}" class="px-6 py-3 bg-white border border-gray-300 text-gray-800 font-semibold rounded-lg hover:shadow-lg transition">Saber más</a>
                </div>
            </div>

            <!-- Columna de imagen -->
            <div class="lg:w-1/2 mt-8 lg:mt-0">
                <img src="{{ asset('img/inicio.jpg') }}" alt="Imagen de fertilización" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>

    <!-- Footer fijo en la parte inferior -->
    <footer class="bg-white shadow-md text-black text-center fixed bottom-0 left-0 w-full py-2">  
        <p class="text-xs">&copy; 2024 Tecnoparque Rionegro. Todos los derechos reservados.</p>
        <div class="mt-2 space-x-4">
            <a href="#" class="hover:text-gray-200 text-xs">Política de privacidad</a>
            <a href="#" class="hover:text-gray-200 text-xs">Términos y condiciones</a>
            <a href="#" class="hover:text-gray-200 text-xs">Contacto</a>
        </div>
    </footer>

</body>
</html>
