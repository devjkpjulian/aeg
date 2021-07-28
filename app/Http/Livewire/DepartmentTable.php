<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Course;
use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class DepartmentTable extends Component
{
    use WithPagination;

    protected $departments;
    public $search = null;
    public $users, $courses;

    public function mount(User $users, Course $courses)
    {
        $this->users = $users->where('role', 3)->get();
        $this->courses = $courses->all();
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
        $this->departments = is_null($this->search) || $this->search == '' ? Department::orderBy('name')->paginate(5) : Department::search($this->search)->orderBy('name')->paginate(5);
        return view('livewire.department-table', [
            'departments' => $this->departments,
        ]);
    }
}
