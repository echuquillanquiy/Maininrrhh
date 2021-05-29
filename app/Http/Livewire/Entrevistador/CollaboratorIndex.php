<?php

namespace App\Http\Livewire\Entrevistador;

use App\Models\Collaborator;
use Livewire\Component;
use Livewire\WithPagination;

class CollaboratorIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $collaborators = Collaborator::where('user_id', auth()->user()->id)
                ->where('nombres', 'LIKE', '%' . $this->search . '%')
                ->orWhere('apellidos', 'LIKE', '%' . $this->search . '%')
                ->orWhere('ndocumento', 'LIKE', '%' . $this->search . '%')
                ->paginate(6);

        return view('livewire.entrevistador.collaborators-index', compact('collaborators'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
