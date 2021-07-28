<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class SGEClass extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];
    protected $table = "sge_classes";

    public function sge_type()
    {
        return $this->belongsTo(SGETypes::class);
    }
}
