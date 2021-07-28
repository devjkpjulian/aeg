<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Course extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];
    protected $table = "courses";

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
