<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('lastname', 'LIKE', '%' . $this->search . '%')
            ->orWhere('dni', 'LIKE', '%' . $this->search . '%')
            ->orWhere('email', 'LIKE', '%' . $this->search . '%')
            ->orWhere('username', 'LIKE', '%' . $this->search . '%')
            ->paginate(6);
        return view('livewire.admin.users-index', compact('users'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
