<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'code',
    'name',
    'major_program_id',
    'tic_id',
])]
class MajorCompetency extends Model
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
            'name' => 'string',
        ];
    }

    public function majorProgram(): BelongsTo
    {
        return $this->belongsTo(MajorProgram::class);
    }

    public function tic(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'tic_id');
    }

    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function schoolClasses(): HasMany
    {
        return $this->hasMany(SchoolClass::class);
    }

    public function subjectNames(): HasMany
    {
        return $this->hasMany(SubjectName::class);
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function hourSchemas(): HasMany
    {
        return $this->hasMany(HourSchema::class);
    }
}
