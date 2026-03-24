<?php

namespace App\Models;

use App\Enums\ClassFragment;
use App\Enums\ClassLevel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'level',
    'major_competency_id',
    'fragment',
    'tic_id',
    'sic_id',
    'room_id',
])]
class SchoolClass extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'level' => ClassLevel::class,
            'fragment' => ClassFragment::class,
        ];
    }
}
