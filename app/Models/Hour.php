<?php

namespace App\Models;

use App\Enums\HourStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'hour_schema_day_id',
    'started_at',
    'finished_at',
    'status',
    'description',
])]
class Hour extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'started_at' => 'datetime:H:i:s',
            'finished_at' => 'datetime:H:i:s',
            'status' => HourStatus::class,
            'description' => 'string',
        ];
    }
}
