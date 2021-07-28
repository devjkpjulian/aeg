<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $users;

    public function mount(User $users){
        $this->users = $users->all();
    }

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
        return view('livewire.dashboard');
    }
}
