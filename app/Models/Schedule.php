<?php

namespace App\Models;

use App\Enums\Day;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'day',
    'hour_id',
    'subject_id',
    'room_id',
    'school_class_id',
])]
class Schedule extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return ['day' => Day::class];
    }
}
