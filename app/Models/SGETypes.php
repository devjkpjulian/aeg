<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class SGETypes extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];
    protected $table = "sge_types";

    public function sge_classes()
    {
        return $this->hasMany(SGEClass::class);
    }
}
