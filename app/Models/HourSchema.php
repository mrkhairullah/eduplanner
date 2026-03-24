<?php

namespace App\Models;

use App\Enums\ClassFragment;
use App\Enums\ClassLevel;
use App\Enums\HourSchemaType;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'type',
    'academic_year_started_at',
    'academic_year_finished_at',
    'active',
    'level',
    'major_competency_id',
    'fragment',
])]
class HourSchema extends Model
{
    /**
     * The model's default values for attributes.
     */
    protected $attributes = ['active' => false];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type' => HourSchemaType::class,
            'academic_year_started_at' => 'datetime:H:i:s',
            'academic_year_finished_at' => 'datetime:H:i:s',
            'active' => 'boolean',
            'level' => ClassLevel::class,
            'fragment' => ClassFragment::class,
        ];
    }
}
