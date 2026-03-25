<?php

namespace App\Models;

use App\Enums\ClassLevel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'code',
    'subject_name_id',
    'teacher_id',
    'level',
    'duration_per_day',
    'duration_per_week',
])]
class Subject extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'code' => 'string',
            'level' => ClassLevel::class,
            'duration_per_day' => 'decimal:2',
            'duration_per_week' => 'decimal:2',
        ];
    }

    public function subjectName(): BelongsTo
    {
        return $this->belongsTo(SubjectName::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function unpreferredHours(): HasMany
    {
        return $this->hasMany(SubjectUnpreferredHour::class);
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }
}
