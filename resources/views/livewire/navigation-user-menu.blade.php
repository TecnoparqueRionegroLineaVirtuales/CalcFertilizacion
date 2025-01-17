<nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto px-6 lg:px-20 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center justify-start">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-36"> <!-- Logo más grande -->
        </div>
        <!-- Enlaces -->
        <div class="flex items-center space-x-6 text-gray-600">
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
