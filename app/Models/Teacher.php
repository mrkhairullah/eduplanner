<?php

namespace App\Models;

use App\Enums\UserEducation;
use App\Models\Concerns\HasNameWithTitle;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'user_id',
    'code',
    'nip',
    'title_prefix',
    'title_suffix',
    'last_education',
    'position_id',
    'level_id',
    'mutation_record',
])]
class Teacher extends Model
{
    use HasNameWithTitle;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'code' => 'string',
            'nip' => 'string',
            'title_prefix' => 'string',
            'title_suffix' => 'string',
            'last_education' => UserEducation::class,
            'mutation_record' => 'string',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(TeacherPosition::class, 'position_id');
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(TeacherLevel::class, 'level_id');
    }

    public function majorCompetencies(): BelongsToMany
    {
        return $this->belongsToMany(MajorCompetency::class);
    }

    public function schoolClassesTics(): HasMany
    {
        return $this->hasMany(SchoolClass::class, 'tic_id');
    }

    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }

    public function unavailabilities(): HasMany
    {
        return $this->hasMany(TeacherUnavailability::class);
    }
}
