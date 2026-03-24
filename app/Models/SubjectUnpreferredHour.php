<?php

namespace App\Models;

use App\Enums\Day;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'subject_id',
    'day',
    'started_at',
    'finished_at',
])]
class SubjectUnpreferredHour extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'day' => Day::class,
            'started_at' => 'datetime:H:i:s',
            'finished_at' => 'datetime:H:i:s',
        ];
    }
}
