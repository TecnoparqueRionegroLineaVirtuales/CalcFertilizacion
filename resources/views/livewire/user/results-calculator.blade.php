<div class="bg-gradient-to-b from-white via-green-100 to-white bg-fixed min-h-screen">
    <div class="container py-60 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8;">
        <div class="h max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-3xl text-center text-gray-700 font-semibold mb-8">Valores de los nutrientes en el suelo</h1>
            <p class="text-center">Estos valores son obtenidos según el cálculo realizado en base a los datos suministrados.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl text-center text-gray-700 font-semibold mb-6">Resultados del Cálculo de Fertilización</h2>
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left">Nutriente</th>
                        <th class="px-4 py-2 text-left">Requerimiento (kg/hectárea)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Profundidad</strong></td>
                        <td class="border px-4 py-2">{{ $results['rprof'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Material Orgánico</strong></td>
                        <td class="border px-4 py-2">{{ $results['rmo'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Fósforo (P)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rp'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Potasio (K)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rk'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Calcio (Ca)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rca'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Magnesio (Mg)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rmg'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Azufre (S)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rs'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Hierro (Fe)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rfe'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Manganeso (Mn)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rmn'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Cobre (Cu)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rcu'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Zinc (Zn)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rzn'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Boro (B)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rb'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>pH del Suelo</strong></td>
                        <td class="border px-4 py-2">{{ $results['ph'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Nitrógeno (N)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rna'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Fosfato (P)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rph'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2"><strong>Requerimiento de Fertilización para Carbonato (CaO)</strong></td>
                        <td class="border px-4 py-2">{{ $results['rce'] }}</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="text-xl text-center text-gray-700 font-semibold mt-8 mb-4">Requerimientos Nutricionales para el Cultivo: {{ $selectedCrop }}</h3>
            <table class="min-w-full table-auto mt-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left">Nutriente</th>
                        <th class="px-4 py-2 text-left">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cropRequirements as $nutrient => $value)
                        <tr>
                            <td class="border px-4 py-2"><strong>{{ $nutrient }}</strong></td>
                            <td class="border px-4 py-2">{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if( $selectedCrop == 'papa')
                <h2>Papa</h2>
                <h3>Fenología</h3>
                <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">Fenología</th>
                    <th class="px-4 py-2 text-left">Fase 1</th>
                    <th class="px-4 py-2 text-left">Fase 2</th>
                    <th class="px-4 py-2 text-left">Fase 3</th>
                    <th class="px-4 py-2 text-left">Fase 4</th>
                    <th class="px-4 py-2 text-left">Fase 5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="border px-4 py-2">Germinación y emergencia</td>
                    <td class="border px-4 py-2">1%</td>
                    <td class="border px-4 py-2">4%</td>
                    <td class="border px-4 py-2">25%</td>
                    <td class="border px-4 py-2">55%</td>
                    <td class="border px-4 py-2">15%</td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Días</td>
                    <td class="border px-4 py-2">25</td>
                    <td class="border px-4 py-2">20</td>
                    <td class="border px-4 py-2">20</td>
                    <td class="border px-4 py-2">45</td>
                    <td class="border px-4 py-2">20</td>
                    </tr>
                </tbody>
                </table>

                <h3>Requerimientos del Cultivo</h3>
                <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">Nutriente</th>
                    <th class="px-4 py-2 text-left">poco trabajado</th>
                    <th class="px-4 py-2 text-left">mediana trabajado</th>
                    <th class="px-4 py-2 text-left">muy trabajado</th>
                    <th class="px-4 py-2 text-left">Cantidad 0-25</th>
                    <th class="px-4 py-2 text-left">Cantidad 25-45</th>
                    <th class="px-4 py-2 text-left">Cantidad 45-65</th>
                    <th class="px-4 py-2 text-left">Cantidad 65-110</th>
                    <th class="px-4 py-2 text-left">Cantidad 110-130</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="border px-4 py-2">Nitrógeno (N)</td>
                    <td class="border px-4 py-2">120-200 kg/ha</td>
                    <td class="border px-4 py-2">120</td>
                    <td class="border px-4 py-2">160</td>
                    <td class="border px-4 py-2">200</td>
                    <td class="border px-4 py-2">N</td>
                    <td class="border px-4 py-2">29%</td>
                    <td class="border px-4 py-2">43%</td>
                    <td class="border px-4 py-2">29%</td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Fósforo (P₂O₅)</td>
                    <td class="border px-4 py-2">80-150 kg/ha</td>
                    <td class="border px-4 py-2">80</td>
                    <td class="border px-4 py-2">115</td>
                    <td class="border px-4 py-2">150</td>
                    <td class="border px-4 py-2">P</td>
                    <td class="border px-4 py-2">25%</td>
                    <td class="border px-4 py-2">25%</td>
                    <td class="border px-4 py-2">25%</td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Potasio (K₂O)</td>
                    <td class="border px-4 py-2">200-300 kg/ha</td>
                    <td class="border px-4 py-2">200</td>
                    <td class="border px-4 py-2">250</td>
                    <td class="border px-4 py-2">300</td>
                    <td class="border px-4 py-2">K</td>
                    <td class="border px-4 py-2">20%</td>
                    <td class="border px-4 py-2">30%</td>
                    <td class="border px-4 py-2">20%</td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Calcio (Ca)</td>
                    <td class="border px-4 py-2">50-100 kg/ha</td>
                    <td class="border px-4 py-2">50</td>
                    <td class="border px-4 py-2">75</td>
                    <td class="border px-4 py-2">100</td>
                    <td class="border px-4 py-2">Ca</td>
                    <td class="border px-4 py-2">25%</td>
                    <td class="border px-4 py-2">25%</td>
                    <td class="border px-4 py-2">25%</td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Magnesio (Mg)</td>
                    <td class="border px-4 py-2">25-50 kg/ha</td>
                    <td class="border px-4 py-2">25</td>
                    <td class="border px-4 py-2">37,5</td>
                    <td class="border px-4 py-2">50</td>
                    <td class="border px-4 py-2">Mg</td>
                    <td class="border px-4 py-2">25%</td>
                    <td class="border px-4 py-2">25%</td>
                    <td class="border px-4 py-2">25%</td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Azufre (S)</td>
                    <td class="border px-4 py-2">20-40 kg/ha</td>
                    <td class="border px-4 py-2">20</td>
                    <td class="border px-4 py-2">30</td>
                    <td class="border px-4 py-2">40</td>
                    <td class="border px-4 py-2">S</td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Boro (B)</td>
                    <td class="border px-4 py-2">0.5-1 kg/ha</td>
                    <td class="border px-4 py-2">0.5</td>
                    <td class="border px-4 py-2">0.75</td>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">Fe</td>
                    <td class="border px-4 py-2">1%</td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Zinc (Zn)</td>
                    <td class="border px-4 py-2">1-2 kg/ha</td>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">1.5</td>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">Mn</td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    </tr>
                    <tr>
                    <td class="border px-4 py-2">Hierro (Fe)</td>
                    <td class="border px-4 py-2">1.5-2 kg/ha</td>
                    <td class="border px-4 py-2">1.5</td>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">2.5</td>
                    <td class="border px-4 py-2">Cu</td>
                    <td class="border px-4 py-2">6.0</td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    </tr>
                </tbody>
                </table>

                <h3>Plagas y Enfermedades</h3>
                <table class="min-w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left">Plagas</th>
                        <th class="px-4 py-2 text-left">Descripción</th>
                        <th class="px-4 py-2 text-left">Daño</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="border px-4 py-2">Escarabajo de la patata</td>
                        <td class="border px-4 py-2">Daños en las hojas, reduciendo el área foliar</td>
                        <td class="border px-4 py-2">Reducción del rendimiento de la planta</td>
                        </tr>
                        <tr>
                        <td class="border px-4 py-2">Mosca blanca</td>
                        <td class="border px-4 py-2">Alimenta de la savia, afecta la fotosíntesis</td>
                        <td class="border px-4 py-2">Amarilleo y caída de hojas</td>
                        </tr>
                        <tr>
                        <td class="border px-4 py-2">Gusano cogollero</td>
                        <td class="border px-4 py-2">Infesta el tallo y la raíz</td>
                        <td class="border px-4 py-2">Desmejoramiento del desarrollo de la planta</td>
                        </tr>
                    </tbody>
                </table>
            @endif
            @if($selectedCrop == 'aguacate')
            <h2 class="text-3xl font-semibold mb-4">Aguacate</h2>

            <h3 class="text-2xl font-semibold mb-2">Fenología</h3>
            <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left">Fenología</th>
                <th class="px-6 py-3 text-center">Fase 1</th>
                <th class="px-6 py-3 text-center">Fase 2</th>
                <th class="px-6 py-3 text-center">Fase 3</th>
                <th class="px-6 py-3 text-center">Fase 4</th>
                <th class="px-6 py-3 text-center">Fase 5</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                <td class="px-6 py-3">Desarrollo de la plántula</td>
                <td class="px-6 py-3 text-center">1%</td>
                <td class="px-6 py-3 text-center">4%</td>
                <td class="px-6 py-3 text-center">15%</td>
                <td class="px-6 py-3 text-center">30%</td>
                <td class="px-6 py-3 text-center">30%</td>
                </tr>
                <tr class="border-t">
                <td class="px-6 py-3">Días</td>
                <td class="px-6 py-3 text-center">20</td>
                <td class="px-6 py-3 text-center">20</td>
                <td class="px-6 py-3 text-center">20</td>
                <td class="px-6 py-3 text-center">30</td>
                <td class="px-6 py-3 text-center">30</td>
                </tr>
            </tbody>
            </table>

            <h3 class="text-2xl font-semibold mt-6 mb-2">Requerimientos del Cultivo</h3>
            <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left">Nutriente</th>
                <th class="px-6 py-3 text-center">Poco trabajado</th>
                <th class="px-6 py-3 text-center">Mediana trabajado</th>
                <th class="px-6 py-3 text-center">Muy trabajado</th>
                <th class="px-6 py-3 text-center">Cantidad 0-20</th>
                <th class="px-6 py-3 text-center">Cantidad 20-40</th>
                <th class="px-6 py-3 text-center">Cantidad 40-60</th>
                <th class="px-6 py-3 text-center">Cantidad 60-80</th>
                <th class="px-6 py-3 text-center">Cantidad 80-100</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                <td class="px-6 py-3">Nitrógeno (N)</td>
                <td class="px-6 py-3 text-center">100-150 kg/ha</td>
                <td class="px-6 py-3 text-center">100</td>
                <td class="px-6 py-3 text-center">120</td>
                <td class="px-6 py-3 text-center">150</td>
                <td class="px-6 py-3 text-center">200</td>
                <td class="px-6 py-3 text-center">200</td>
                <td class="px-6 py-3 text-center">300</td>
                <td class="px-6 py-3 text-center">200</td>
                </tr>
                <tr class="border-t">
                <td class="px-6 py-3">Fósforo (P₂O₅)</td>
                <td class="px-6 py-3 text-center">100-150 kg/ha</td>
                <td class="px-6 py-3 text-center">100</td>
                <td class="px-6 py-3 text-center">125</td>
                <td class="px-6 py-3 text-center">150</td>
                <td class="px-6 py-3 text-center">150</td>
                <td class="px-6 py-3 text-center">150</td>
                <td class="px-6 py-3 text-center">150</td>
                </tr>
                <tr class="border-t">
                <td class="px-6 py-3">Potasio (K₂O)</td>
                <td class="px-6 py-3 text-center">150-200 kg/ha</td>
                <td class="px-6 py-3 text-center">150</td>
                <td class="px-6 py-3 text-center">180</td>
                <td class="px-6 py-3 text-center">200</td>
                <td class="px-6 py-3 text-center">250</td>
                <td class="px-6 py-3 text-center">300</td>
                <td class="px-6 py-3 text-center">250</td>
                </tr>
                <tr class="border-t">
                <td class="px-6 py-3">Calcio (Ca)</td>
                <td class="px-6 py-3 text-center">80-100 kg/ha</td>
                <td class="px-6 py-3 text-center">100</td>
                <td class="px-6 py-3 text-center">125</td>
                <td class="px-6 py-3 text-center">150</td>
                <td class="px-6 py-3 text-center">175</td>
                <td class="px-6 py-3 text-center">200</td>
                <td class="px-6 py-3 text-center">250</td>
                </tr>
                <tr class="border-t">
                <td class="px-6 py-3">Magnesio (Mg)</td>
                <td class="px-6 py-3 text-center">20-40 kg/ha</td>
                <td class="px-6 py-3 text-center">25</td>
                <td class="px-6 py-3 text-center">40</td>
                <td class="px-6 py-3 text-center">50</td>
                <td class="px-6 py-3 text-center">70</td>
                <td class="px-6 py-3 text-center">80</td>
                <td class="px-6 py-3 text-center">100</td>
                </tr>
            </tbody>
            </table>
            @endif
            @if($selectedCrop == 'tomate')
            <h2 class="text-3xl font-bold my-4">Tomate</h2>

            <h3 class="text-2xl font-semibold my-2">Fenología</h3>
            <table class="min-w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                <th class="px-4 py-2 border border-gray-200 text-left">Fenología</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Fase 1</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Fase 2</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Fase 3</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Fase 4</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Fase 5</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Fase 6</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="px-4 py-2 border border-gray-200">Desarrollo de la plántula</td>
                <td class="px-4 py-2 border border-gray-200 text-center">1%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">4%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">55%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">15%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">15%</td>
                </tr>
                <tr>
                <td class="px-4 py-2 border border-gray-200">Días</td>
                <td class="px-4 py-2 border border-gray-200 text-center">10</td>
                <td class="px-4 py-2 border border-gray-200 text-center">30</td>
                <td class="px-4 py-2 border border-gray-200 text-center">20</td>
                <td class="px-4 py-2 border border-gray-200 text-center">45</td>
                <td class="px-4 py-2 border border-gray-200 text-center">20</td>
                <td class="px-4 py-2 border border-gray-200 text-center">20</td>
                </tr>
            </tbody>
            </table>

            <h3 class="text-2xl font-semibold my-2">Requerimientos del Cultivo</h3>
            <table class="min-w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                <th class="px-4 py-2 border border-gray-200 text-left">Nutriente</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Poco trabajado</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Mediana trabajado</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Muy trabajado</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Cantidad 0-30</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Cantidad 30-60</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Cantidad 60-80</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Cantidad 80-100</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Cantidad 100-130</th>
                <th class="px-4 py-2 border border-gray-200 text-center">Cantidad 130-160</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="px-4 py-2 border border-gray-200">Nitrógeno (N)</td>
                <td class="px-4 py-2 border border-gray-200 text-center">120-200 kg/ha</td>
                <td class="px-4 py-2 border border-gray-200 text-center">120</td>
                <td class="px-4 py-2 border border-gray-200 text-center">160</td>
                <td class="px-4 py-2 border border-gray-200 text-center">200</td>
                <td class="px-4 py-2 border border-gray-200 text-center">29%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">43%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">29%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">-</td>
                </tr>
                <tr>
                <td class="px-4 py-2 border border-gray-200">Fósforo (P₂O₅)</td>
                <td class="px-4 py-2 border border-gray-200 text-center">80-180 kg/ha</td>
                <td class="px-4 py-2 border border-gray-200 text-center">80</td>
                <td class="px-4 py-2 border border-gray-200 text-center">130</td>
                <td class="px-4 py-2 border border-gray-200 text-center">180</td>
                <td class="px-4 py-2 border border-gray-200 text-center">-</td>
                <td class="px-4 py-2 border border-gray-200 text-center">14%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">43%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">14%</td>
                </tr>
                <tr>
                <td class="px-4 py-2 border border-gray-200">Potasio (K₂O)</td>
                <td class="px-4 py-2 border border-gray-200 text-center">200-300 kg/ha</td>
                <td class="px-4 py-2 border border-gray-200 text-center">200</td>
                <td class="px-4 py-2 border border-gray-200 text-center">250</td>
                <td class="px-4 py-2 border border-gray-200 text-center">300</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">20%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">20%</td>
                </tr>
                <tr>
                <td class="px-4 py-2 border border-gray-200">Calcio (Ca)</td>
                <td class="px-4 py-2 border border-gray-200 text-center">50-100 kg/ha</td>
                <td class="px-4 py-2 border border-gray-200 text-center">50</td>
                <td class="px-4 py-2 border border-gray-200 text-center">75</td>
                <td class="px-4 py-2 border border-gray-200 text-center">100</td>
                <td class="px-4 py-2 border border-gray-200 text-center">-</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25%</td>
                </tr>
                <tr>
                <td class="px-4 py-2 border border-gray-200">Magnesio (Mg)</td>
                <td class="px-4 py-2 border border-gray-200 text-center">20-40 kg/ha</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25</td>
                <td class="px-4 py-2 border border-gray-200 text-center">37,5</td>
                <td class="px-4 py-2 border border-gray-200 text-center">50</td>
                <td class="px-4 py-2 border border-gray-200 text-center">20%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">25%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">20%</td>
                <td class="px-4 py-2 border border-gray-200 text-center">15%</td>
                </tr>
            </tbody>
            </table>
            @endif
            <div class="mt-6">
                <a href="{{ route('frontend.user.parameterCalculator') }}" class="inline-block py-3 px-6 bg-[#15803D] text-white font-semibold rounded-lg shadow-lg hover:bg-[#13692D] transition">
                    Volver a la calculadora
                </a>
            </div>
        </div>
    </div>
</div>
