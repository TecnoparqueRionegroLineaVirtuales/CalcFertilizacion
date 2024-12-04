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
         }else{
             return view ('livewire.user.aditionalParameter');
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

    public function processAdditional(Request $request)
    {
        $validated = $request->validate([
            'terrain_inclination' => 'required|in:flat,inclined',
            'has_weather_station' => 'required|in:yes,no',
            'location' => 'nullable|string',
            'temperature' => 'nullable|numeric',
            'rainfall' => 'nullable|numeric',
            'climate' => 'nullable|in:cold,temperate,hot',
            'city' => 'nullable|string',
        ]);

        $recommendations = $this->determineRecommendations($validated);

        return view('livewire.user.report', ['recommendations' => $recommendations]);
    }

    private function determineRecommendations($data)
    {
        $recommendations = [];

        if ($data['climate'] === 'hot') {
            $recommendations = [
                'N' => '140 kg/ha/año',
                'P' => '40 kg/ha/año',
                'K' => '106 kg/ha/año',
                'Ca & Mg' => '500-600 kg/ha/año',
            ];
        } elseif ($data['climate'] === 'cold') {
            $recommendations = [
                'N' => 'Ajustado según análisis',
                'P' => 'Ajustado según disponibilidad',
                'K' => 'Ajustado según condiciones',
                'Ca & Mg' => 'Ajustado según deficiencias',
            ];
        } elseif ($data['climate'] === 'temperate') {
            $recommendations = [
                'N' => '120-140 kg/ha/año',
                'P' => '30-50 kg/ha/año',
                'K' => '80-100 kg/ha/año',
                'Ca & Mg' => '300-500 kg/ha/año',
            ];
        }

        return $recommendations;
    }

}
