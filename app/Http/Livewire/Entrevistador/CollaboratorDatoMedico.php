<?php

namespace App\Http\Livewire\Entrevistador;

use App\Models\Client;
use App\Models\Collaborator;
use App\Models\Medical;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use function Couchbase\passthruEncoder;

class CollaboratorDatoMedico extends Component
{
    public $collaborator, $medical, $clients;

    public $client_id = 1, $peso, $talla, $imc, $diagnutricion, $fechaexmedico, $levantamientoobs, $centromedico, $aptitud;

    protected $rules = [
        'medical.client_id' => 'required',
        'medical.peso' => 'required',
        'medical.talla' => 'required',
        'medical.imc' => 'required',
        'medical.diagnutricion' => 'required',
        'medical.fechaexmedico' => 'required',
        'medical.levantamientoobs' => 'required',
        'medical.centromedico' => 'required',
        'medical.aptitud' => 'required',
    ];

    public function mount(Collaborator $collaborator){
        $this->collaborator = $collaborator;
        $this->clients = Client::all();

        $this->medical = new Medical();

    }

    public function render()
    {
        return view('livewire.entrevistador.collaborator-dato-medico')->layout('layouts.entrevistador');
    }

    public function store(){
        $rules = [
            'client_id' => 'required',
            'peso' => 'required',
            'talla' => 'required',
            'imc' => 'required',
            'diagnutricion' => 'required',
            'fechaexmedico' => 'required',
            'levantamientoobs' => 'required',
            'centromedico' => 'required',
            'aptitud' => 'required',
        ];

        $this->validate($rules);

        Medical::create([
            'client_id' => $this->client_id,
            'peso' => $this->peso,
            'talla' => $this->talla,
            'imc' => $this->imc,
            'diagnutricion' => $this->diagnutricion,
            'fechaexmedico' => $this->fechaexmedico,
            'levantamientoobs' => $this->levantamientoobs,
            'centromedico' => $this->centromedico,
            'aptitud' => $this->aptitud,
            'collaborator_id' => $this->collaborator->id
        ]);

        $this->reset([
            'client_id',
            'peso',
            'talla',
            'imc',
            'diagnutricion',
            'fechaexmedico',
            'levantamientoobs',
            'centromedico',
            'aptitud',
        ]);

        $this->collaborator = Collaborator::find($this->collaborator->id);
    }

    public function edit(Medical $medical){
        $this->medical = $medical;
    }

    public function calcularImcStore(){

        if (!$this->peso == null && !$this->talla == null){
            $this->imc = round( $this->peso / ( $this->talla * $this->talla), 2);
        }
        if ($this->imc < 18){
            $this->diagnutricion = 'BAJO PESO';
        }elseif ($this->imc < 25){
            $this->diagnutricion = 'NORMOPESO';
        }elseif ($this->imc < 30) {
            $this->diagnutricion = 'SOBREPESO';
        }elseif ($this->imc < 35) {
            $this->diagnutricion = 'OBESIDAD TIPO I';
        }elseif ($this->imc < 40) {
            $this->diagnutricion = 'OBESIDAD TIPO II';
        }else {
            $this->diagnutricion = 'OBESIDAD MORBIDA';
        }
    }

    public function calcularImc(){

        if (!$this->medical->peso == null && !$this->medical->talla == null){
            $this->medical->imc = round( $this->medical->peso / ( $this->medical->talla * $this->medical->talla), 2);
        }
        if ($this->medical->imc < 18){
            $this->medical->diagnutricion = 'BAJO PESO';
        }elseif ($this->medical->imc < 25){
            $this->medical->diagnutricion = 'NORMOPESO';
        }elseif ($this->medical->imc < 30) {
            $this->medical->diagnutricion = 'SOBREPESO';
        }elseif ($this->medical->imc < 35) {
            $this->medical->diagnutricion = 'OBESIDAD TIPO I';
        }elseif ($this->medical->imc < 40) {
            $this->medical->diagnutricion = 'OBESIDAD TIPO II';
        }else {
            $this->medical->diagnutricion = 'OBESIDAD MORBIDA';
        }
    }

    public function update(){
        $this->validate();

        $this->medical->save();
        $this->medical = new Medical();

        $this->collaborator = Collaborator::find($this->collaborator->id);
    }

    public function cancel(){
        $this->medical = new Medical();
    }
}
