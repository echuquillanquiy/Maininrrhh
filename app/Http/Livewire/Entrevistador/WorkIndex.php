<?php

namespace App\Http\Livewire\Entrevistador;

use Livewire\Component;

use App\Models\Work;
use Livewire\WithPagination;

class WorkIndex extends Component
{
    use WithPagination;

    public $search;


    public function render()
    {
        $works = Work::where('user_id', auth()->user()->id)
            ->where('titulo', 'LIKE', '%' . $this->search . '%')
            ->paginate(8);

        return view('livewire.entrevistador.work-index', compact('works'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
