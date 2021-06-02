<?php

namespace App\Http\Livewire\Entrevistador;

use App\Models\Collaborator;
use App\Models\Training;
use Livewire\Component;

class CollaboratorTraining extends Component
{

    public $collaborator, $training, $empresa, $descripcion, $fechacap;

    protected $rules = [
        'training.empresa' => 'required',
        'training.descripcion' => 'required',
        'training.fechacap' => 'required'
    ];

    public function mount(Collaborator $collaborator){
        $this->collaborator = $collaborator;
        $this->training = new  Training();
    }
    public function render()
    {
        return view('livewire.entrevistador.collaborators-training')->layout('layouts.entrevistador');
    }

    public function store(){
        $rules = [
            'empresa' => 'required',
            'descripcion' => 'required',
            'fechacap' => 'required'
        ];

        $this->validate($rules);

        Training::create([
            'empresa' => $this->empresa,
            'descripcion' => $this->descripcion,
            'fechacap' => $this->fechacap,
            'collaborator_id' => $this->collaborator->id
        ]);

        $this->reset(['empresa', 'descripcion', 'fechacap']);
        $this->collaborator = Collaborator::find($this->collaborator->id);
    }

    public function edit(Training $training){
        $this->resetValidation();
        $this->training = $training;
    }

    public function update(){
        $this->validate();

        $this->training->save();
        $this->training = new Training();

        $this->collaborator = Collaborator::find($this->collaborator->id);
    }

    public function cancel(){
        $this->training = new Training();
    }

    public function destroy(Training $training){
        $training->delete();
        $this->collaborator = Collaborator::find($this->collaborator->id);
    }

}
