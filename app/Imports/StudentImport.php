<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;

class StudentImport implements ToCollection
{
    use Importable;

    public $class_id;

    public function  __construct($class_id)
    {
        $this->class_id = $class_id;
    }

    public function collection(Collection $collections)
    {
        foreach ($collections as $collection) 
        {
            Student::create([
                'class_id' => $this->class_id,
                'student_number' => $collection[0],
                'name' => $collection[1],
            ]);
        }
        return back();
    }
}
