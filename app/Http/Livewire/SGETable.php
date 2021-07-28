<?php

namespace App\Http\Livewire;

use App\Models\SGETypes;
use Livewire\Component;
use Livewire\WithPagination;

class SGETable extends Component
{
    use WithPagination;

    protected $sge_types;
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
        $this->sge_types = is_null($this->search) || $this->search == '' ? SGETypes::orderBy('name')->paginate(5) : SGETypes::search($this->search)->orderBy('name')->paginate(5);
        return view('livewire.s-g-e-table', [
            'sge_types' => $this->sge_types,
        ]);
    }
}
