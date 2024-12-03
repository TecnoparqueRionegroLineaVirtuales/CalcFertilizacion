<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fertilización</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-white via-green-100 to-white bg-fixed min-h-screen">
    <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto px-6 lg:px-20 py-4 flex justify-between items-center">
            <div class="flex items-center justify-start">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-36">
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6 lg:px-20 py-24 mt-36 fade-in">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Calculadora de Fertilización</h1>
        <p class="text-lg text-gray-700 mb-8">
            Completa la información de tu cultivo para obtener recomendaciones precisas.
        </p>
        
        <!-- Formulario -->
        <form action="{{ route('frontend.user.process') }}" method="POST" class="bg-white shadow-md rounded-lg p-8">
            @csrf
            <div class="mb-6">
                <label for="crop" class="block text-gray-700 font-medium mb-2">Selecciona tu cultivo:</label>
                <select name="crop" id="crop" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    <option value="">-- Selecciona --</option>
                    <option value="papa">Papa</option>
                    <option value="aguacate">Aguacate</option>
                    <option value="tomate">Tomate</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="age" class="block text-gray-700 font-medium mb-2">Edad del cultivo (en meses):</label>
                <input type="number" name="age" id="age" class="w-full p-3 border border-gray-300 rounded-lg" min="0" required placeholder="Ingresa la edad en meses">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">¿Realizaste estudio de suelo?</label>
                <div class="flex items-center space-x-6">
                    <label class="flex items-center">
                        <input type="radio" name="soil_test" value="yes" class="form-radio text-[#15803D]" required>
                        <span class="ml-2">Sí</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="soil_test" value="no" class="form-radio text-[#15803D]" required>
                        <span class="ml-2">No</span>
                    </label>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full py-3 bg-[#15803D] text-white font-semibold rounded-lg shadow-lg hover:bg-[#13692D] transition">
                    Calcular
                </button>
            </div>
        </form>
    </div>

    <footer class="bg-white shadow-md text-black text-center fixed bottom-0 left-0 w-full py-2">  
        <p class="text-xs">&copy; 2024 Tecnoparque Rionegro. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
