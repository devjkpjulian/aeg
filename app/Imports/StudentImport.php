<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;

class StudentImport implements ToCollection
{
    use Importable;

    public $class_id, $prog_id;

    public function  __construct($class_id)
    {
        $this->class_id = $class_id;
    }

    public function collection(Collection $collections)
    {
        foreach ($collections as $collection) 
        {
            $prog = Course::where('abbreviation', $collection[2])->first();
            $this->prog_id = is_null($prog) ? null : $prog->id;

            Student::create([
                'class_id' => $this->class_id,
                'student_number' => $collection[0],
                'name' => $collection[1],
                'program_id' =>  !is_null($this->prog_id) ? $this->prog_id : null,
            ]);
        }
    }
}
