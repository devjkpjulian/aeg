<?php

namespace App\Http\Livewire;

use App\Models\Student;
use App\Models\SGEClass;
use App\Models\SGETypes;
use Livewire\Component;
use Livewire\WithPagination;

class ClasslistTable extends Component
{
    use WithPagination;

    protected $sge_classes;
    public $sge_types, $students;
    public $search = null;

    public function mount(SGETypes $sge_types, Student $students)
    {
        $this->students = $students->all();
        $this->sge_types = $sge_types->all();
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
        $this->sge_classes = is_null($this->search) || $this->search == '' ? SGEClass::orderBy('created_at')->paginate(5) : SGEClass::search($this->search)->orderBy('created_at')->paginate(5);
        return view('livewire.classlist-table', [
            'sge_classes' => $this->sge_classes,
        ]);
    }
}
