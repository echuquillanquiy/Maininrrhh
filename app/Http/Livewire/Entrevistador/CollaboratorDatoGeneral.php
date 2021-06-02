<?php

namespace App\Http\Livewire\Entrevistador;

use App\Models\Amount;
use App\Models\Area;
use App\Models\Category;
use App\Models\Collaborator;
use App\Models\DatoGeneral;
use App\Models\Position;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class CollaboratorDatoGeneral extends Component
{
    public $collaborator, $datogeneral, $categories, $amounts, $areas, $positions;

    public $category_id = 1,
            $amount_id = 1,
            $area_id = 1,
            $position_id = 1,
            $respirador,
            $zapatos,
            $tallazapato,
            $tallapantalon,
            $tallacamisa,
            $inicioinduccion,
            $fininduccion,
            $lugarinduccion,
            $especialidad,
            $medio,
            $observaciones,
            $comentarios;

    protected $rules = [
        'datogeneral.category_id' => 'required',
        'datogeneral.amount_id' => 'required',
        'datogeneral.area_id' => 'required',
        'datogeneral.position_id' => 'required',
        'datogeneral.respirador' => 'required',
        'datogeneral.zapatos' => 'required',
        'datogeneral.tallazapato' => 'required',
        'datogeneral.tallapantalon' => 'required',
        'datogeneral.tallacamisa' => 'required',
        'datogeneral.inicioinduccion' => 'required',
        'datogeneral.fininduccion' => 'required',
        'datogeneral.lugarinduccion' => 'required',
        'datogeneral.especialidad' => 'required',
        'datogeneral.medio' => 'required',
        'datogeneral.observaciones' => 'required',
        'datogeneral.comentarios' => 'required',
    ];

    public function mount(Collaborator $collaborator){
        $this->collaborator = $collaborator;

        $this->categories = Category::all();
        $this->amounts = Amount::all();
        $this->areas = Area::all();
        $this->positions = Position::all();

        $this->datogeneral = new DatoGeneral();
    }

    public function render()
    {
        return view('livewire.entrevistador.collaborator-dato-general')->layout('layouts.entrevistador');
    }

    public function store(){
        $rules = [
            'category_id' => 'required',
            'amount_id' => 'required',
            'area_id' => 'required',
            'position_id' => 'required',
            'respirador' => 'required',
            'zapatos' => 'required',
            'tallazapato' => 'required',
            'tallapantalon' => 'required',
            'tallacamisa' => 'required',
            'inicioinduccion' => 'required',
            'fininduccion' => 'required',
            'lugarinduccion' => 'required',
            'especialidad' => 'required',
            'medio' => 'required',
            'observaciones' => 'required',
            'comentarios' => 'required',
        ];

        $this->validate($rules);

        DatoGeneral::create([
            'category_id' => $this->category_id,
            'amount_id' => $this->amount_id,
            'area_id' => $this->area_id,
            'position_id' => $this->position_id,
            'respirador' => $this->respirador,
            'zapatos' => $this->zapatos,
            'tallazapato' => $this->tallazapato,
            'tallapantalon' => $this->tallapantalon,
            'tallacamisa' => $this->tallacamisa,
            'inicioinduccion' => $this->inicioinduccion,
            'fininduccion' => $this->fininduccion,
            'lugarinduccion' => $this->lugarinduccion,
            'especialidad' => $this->especialidad,
            'medio' => $this->medio,
            'observaciones' => $this->observaciones,
            'comentarios' => $this->comentarios,
            'collaborator_id' => $this->collaborator->id
        ]);

        $this->reset([
            'category_id',
            'amount_id',
            'area_id',
            'position_id',
            'respirador',
            'zapatos',
            'tallazapato',
            'tallapantalon',
            'tallacamisa',
            'inicioinduccion',
            'fininduccion',
            'lugarinduccion',
            'especialidad',
            'medio',
            'observaciones',
            'comentarios',
        ]);
        $this->collaborator = Collaborator::find($this->collaborator->id);

    }

    public function edit(DatoGeneral $datogeneral){
        $this->datogeneral = $datogeneral;
    }

    public function update(){
        $this->validate();

        $this->datogeneral->save();
        $this->datogeneral = new DatoGeneral();

        $this->collaborator = Collaborator::find($this->collaborator->id);
    }

    public function cancel(){
        $this->datogeneral = new DatoGeneral();
    }
}
