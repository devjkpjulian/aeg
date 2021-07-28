<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    protected $users;
    public $search = null;

    public function updating()
    {
        $this->resetPage();
    }

    public function updated()
    {
        $this->resetPage();
    }

    public function render()
    {
        $this->users = is_null($this->search) || $this->search == '' ? User::orderBy('role')->paginate(5) : User::search($this->search)->orderBy('role')->paginate(5);
        return view('livewire.user-table', [
            'users' => $this->users,
        ]);
    }
}
