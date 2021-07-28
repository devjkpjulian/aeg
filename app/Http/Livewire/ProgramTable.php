<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class ProgramTable extends Component
{
    use WithPagination;

    protected $courses;
    public $search = null;
    public $department;

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
        $this->courses = is_null($this->search) || $this->search == '' ? Course::where('department_id',$this->department->id)->paginate(5) : Course::search($this->search)->where('department_id',$this->department->id)->paginate(5);
        return view('livewire.program-table', [
            'courses' => $this->courses,
        ]);
    }
}
