<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentTable extends Component
{
    use WithPagination;

    protected $students;
    public $sge_class, $programs;
    public $search = null;

    public function mount(Course $courses)
    {
        $this->programs = $courses->all();
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
        $this->students = is_null($this->search) || $this->search == '' ? Student::where('class_id',$this->sge_class->id)->orderBy('name')->paginate(5) : Student::search($this->search)->where('class_id',$this->sge_class->id)->orderBy('name')->paginate(5);
        return view('livewire.student-table', [
            'students' => $this->students,
        ]);
    }
}
