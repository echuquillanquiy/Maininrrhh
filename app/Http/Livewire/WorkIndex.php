<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Work;
use App\Models\Type;
use Livewire\WithPagination;

class WorkIndex extends Component
{
    use WithPagination;

    public $type_id;

    public function render()
    {
        $types = Type::all();
        $works = Work::where('estado', 1)
                        ->type($this->type_id)
                        ->latest('id')
                        ->paginate(8);

        return view('livewire.work-index', compact('works', 'types'));
    }

    public function resetFilters(){
        $this->reset(['type_id']);
    }
}
