<?php

namespace App\Models;

use App\Enums\ClassFragment;
use App\Enums\ClassLevel;
use App\Models\Concerns\HasFullNameClass;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    use HasFullNameClass;

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

    public function majorCompetency(): BelongsTo
    {
        return $this->belongsTo(MajorCompetency::class);
    }

    public function tic(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'tic_id');
    }

    public function sic(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'sic_id');
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }
}
