<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Recomendaciones</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-white via-green-100 to-white bg-fixed min-h-screen">
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

    <div class="container mx-auto px-6 lg:px-20 py-24 mt-36 fade-in">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Informe de Recomendaciones</h1>
        <p class="text-lg text-gray-700 mb-8">
            Con base en los datos ingresados, estas son las recomendaciones para tu cultivo:
        </p>

        <div class="bg-white shadow-md rounded-lg p-8">
            <ul class="list-disc pl-5 text-gray-700 space-y-2">
                @foreach ($recommendations as $nutrient => $amount)
                    <li><strong class="text-gray-800">{{ $nutrient }}:</strong> {{ $amount }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <a href="{{ route('frontend.user.parameterCalculator') }}" class="inline-block py-3 px-6 bg-[#15803D] text-white font-semibold rounded-lg shadow-lg hover:bg-[#13692D] transition">
                Volver a la calculadora
            </a>
        </div>
    </div>

    <footer class="bg-white shadow-md text-black text-center fixed bottom-0 left-0 w-full py-2">  
        <p class="text-xs">&copy; 2024 Tecnoparque Rionegro. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
