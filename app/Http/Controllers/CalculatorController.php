<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Muestra la calculadora con los datos ingresados.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */

     public function parameterCalculator(){
        return view ('livewire.user.parameterCalculator');
     }

     public function process(Request $request)
     {
         // Validar los datos del formulario
         $validated = $request->validate([
             'crop' => 'required|string',
             'age' => 'required|integer|min:0',
             'soil_test' => 'required|in:yes,no',
         ]);
 
         // Extraer los datos
         $crop = $validated['crop'];
         $age = $validated['age'];
         $soilTest = $validated['soil_test'];
 
         // Redirigir según la respuesta del estudio de suelo
         if ($soilTest === 'yes') {
             return redirect()->route('frontend.user.calculator', [
                 'crop' => $crop,
                 'age' => $age,
                 'soil_test' => $soilTest,
             ]);
         }
     }

    public function showCalculator(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'crop' => 'required|string|in:papa,aguacate,tomate',
            'age' => 'required|integer|min:1',
            'soil_test' => 'required|in:yes,no',
        ]);

        // Pasar los datos validados a la vista de la calculadora
        return view('user.calculator', [
            'crop' => $validated['crop'],
            'age' => $validated['age'],
            'soil_test' => $validated['soil_test'],
        ]);
    }
}
