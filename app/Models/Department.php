<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Department extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];
    protected $table = "departments";

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
