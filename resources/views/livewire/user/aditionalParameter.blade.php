<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Adicionales</title>
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
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Preguntas Adicionales</h1>
        <p class="text-lg text-gray-700 mb-8">Por favor responde las siguientes preguntas para completar la información de tu cultivo:</p>

        <!-- Formulario -->
        <form id="additional-questions-form" action="{{ route('frontend.process.additional') }}" method="POST" class="bg-white shadow-md rounded-lg p-8">
            @csrf
            <!-- Pregunta 1: Inclinación del terreno -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Inclinación del terreno:</label>
                <select name="terrain_inclination" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    <option value="flat">Plano</option>
                    <option value="inclined">Inclinado</option>
                </select>
            </div>

            <!-- Pregunta 2: Estación meteorológica -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">¿Tienes estación meteorológica?</label>
                <div class="flex items-center space-x-6">
                    <label class="flex items-center">
                        <input type="radio" name="has_weather_station" value="yes" class="form-radio text-[#15803D]" required>
                        <span class="ml-2">Sí</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="has_weather_station" value="no" class="form-radio text-[#15803D]" required>
                        <span class="ml-2">No</span>
                    </label>
                </div>
            </div>

            <!-- Preguntas adicionales según respuesta -->
            <div id="weather-station-yes" class="hidden">
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Ubicación:</label>
                    <input type="text" name="location" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Ingresa la ubicación">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Temperatura real (°C):</label>
                    <input type="number" name="temperature" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Ingresa la temperatura real">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Pluviosidad (mm):</label>
                    <input type="number" name="rainfall" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Ingresa la pluviosidad">
                </div>
            </div>

            <div id="weather-station-no" class="hidden">
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Selecciona el clima de tu terreno:</label>
                    <select name="climate" class="w-full p-3 border border-gray-300 rounded-lg">
                        <option value="cold">Frío</option>
                        <option value="temperate">Templado</option>
                        <option value="hot">Cálido</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Ciudad:</label>
                    <input type="text" name="city" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Ingresa tu ciudad">
                </div>
            </div>

            <button type="submit" class="w-full py-3 bg-[#15803D] text-white font-semibold rounded-lg shadow-lg hover:bg-[#13692D] transition">
                Enviar
            </button>
        </form>
    </div>

    <footer class="bg-white shadow-md text-black text-center fixed bottom-0 left-0 w-full py-2">  
        <p class="text-xs">&copy; 2024 Tecnoparque Rionegro. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Mostrar/ocultar preguntas adicionales
        document.querySelectorAll('input[name="has_weather_station"]').forEach(input => {
            input.addEventListener('change', function () {
                document.getElementById('weather-station-yes').classList.toggle('hidden', this.value !== 'yes');
                document.getElementById('weather-station-no').classList.toggle('hidden', this.value !== 'no');
            });
        });
    </script>
</body>
</html>
