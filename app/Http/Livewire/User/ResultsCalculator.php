<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ResultsCalculator extends Component
{
    public $data;

    public $results = [
        'rprof' => 0,
        'rmo' => 0,
        'rp' => 0,
        'rk' => 0,
        'rca' => 0,
        'rmg' => 0,
        'rs' => 0,
        'rfe' => 0,
        'rmn' => 0,
        'rcu' => 0,
        'rzn' => 0,
        'rb' => 0,
        'ph' => 0,
        'rna' => 0,
        'rph' => 0,
        'rce' => 0,
        'rtm' => 0,
    ];

    public $requirement = [
        'tmo' => '',
        'tp' => '',
        'tk' => '',
        'tca' => '',
        'tmg' => '',
        'ts' => '',
        'tfe' => '',
        'tmn' => '',
        'tcu' => '',
        'tzn' => '',
        'tce' => '',
        'tb' => '',
        'tph' => '',
        'tna' => '',
    ];

    public $resultRequirement = [
        'rtmo' => 0,
        'rtp' => 0,
        'rtk' => 0,
        'rtca' => 0,
        'rtmg' => 0,
        'rts' => 0,
        'rtfe' => 0,
        'rtmn' => 0,
        'rtcu' => 0,
        'rtzn' => 0,
        'rtce' => 0,
        'rtb' => 0,
        'rtph' => 0,
        'rtna' => 0,
    ];

    // Valores nutricionales de cada cultivo
    private $nutritionalValues = [
        'tomate' => [
            'N' => 120, 'P' => 80, 'K' => 150, 'Ca' => 80, 'Mg' => 30, 'S' => 20, 'Fe' => 2, 'Mn' => 0.5, 'Cu' => 0.1, 'Zn' => 1, 'B' => 0.5, 'Na' => 310.5,
        ],
        'aguacate' => [
            'N' => 100, 'P' => 40, 'K' => 80, 'Ca' => 50, 'Mg' => 25, 'S' => 10, 'Fe' => 10, 'Mn' => 10, 'Cu' => 10, 'Zn' => 10, 'B' => 10, 'Na' => 310.5,
        ],
        'papa' => [
            'N' => 120, 'P' => 80, 'K' => 200, 'Ca' => 50, 'Mg' => 25, 'S' => 20, 'Fe' => 2, 'Mn' => 0.5, 'Cu' => 10, 'Zn' => 1, 'B' => 0.5, 'Na' => 310.5,
        ]
    ];

    public function mount()
    {
        $this->data = session('dataCalculator');

        // Establecer valor de rtm según el tipo de clima
        $rtm = $this->getRtmValue($this->data['tm']);

        // Establecer el cultivo seleccionado
        $crop = session('crop');
        $nutrients = $this->nutritionalValues[$crop] ?? [];

        // Cálculos de los nutrientes
        $this->calculateNutrients($rtm);
    }

    // Método para obtener el valor de rtm según el clima
    private function getRtmValue($climate)
    {
        switch ($climate) {
            case 'calido': return 0.3;
            case 'templado': return 0.2;
            case 'frio': return 0.15;
            default: return 0.2; // Valor predeterminado
        }
    }

    // Método para calcular los nutrientes según los datos y el valor de rtm
    private function calculateNutrients($rtm)
    {
        $this->results['rprof'] = $this->data['prof'];
        $this->results['rmo'] = $this->data['mo'] * $rtm * $this->data['da'] * $this->data['prof'] * 50;
        $this->results['rp'] = $this->data['p'] * $this->data['prof'] * $this->data['da'] * 22.9;
        $this->results['rk'] = $this->data['k'] * $this->data['da'] * $this->data['prof'] * 4697.9;
        $this->results['rca'] = $this->data['ca'] * $this->data['da'] * $this->data['prof'] * 2798.4;
        $this->results['rmg'] = $this->data['mg'] * $this->data['da'] * $this->data['prof'] * 1989.7;
        $this->results['rs'] = $this->data['s'] * $this->data['da'] * $this->data['prof'] * 10;
        $this->results['rfe'] = $this->data['fe'] * $this->data['da'] * $this->data['prof'] * 10;
        $this->results['rmn'] = $this->data['mn'] * $this->data['da'] * $this->data['prof'] * 10;
        $this->results['rcu'] = $this->data['cu'] * $this->data['da'] * $this->data['prof'] * 10;
        $this->results['rzn'] = $this->data['zn'] * $this->data['da'] * $this->data['prof'] * 10;
        $this->results['rb'] = $this->data['b'] * $this->data['da'] * $this->data['prof'] * 10;
        $this->results['ph'] = $this->data['ph'];
        $this->results['rna'] = $this->data['na'] * $this->data['da'] * $this->data['prof'] * 310.5;
        $this->results['rph'] = $this->data['ph'];

        $this->results['rce'] = ($this->data['ce'] <= 1) ? 'Se encuentra en el rango' : 'Fuera de rango';
    }

    public function render()
{
    $selectedCrop = session('crop');
    $cropRequirements = $this->nutritionalValues[$selectedCrop] ?? [];

    return view('livewire.user.results-calculator', [
        'selectedCrop' => $selectedCrop,
        'cropRequirements' => $cropRequirements,
        'results' => $this->results  // Aquí pasamos correctamente la variable results
    ])->layout('layouts.user');
}

}
