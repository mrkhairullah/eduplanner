<?php

namespace App\Models;

use App\Enums\UserEducation;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'user_id',
    'code',
    'nip',
    'title_prefix',
    'title_sufix',
    'last_education',
    'position_id',
    'level_id',
    'mutation_record',
])]
class Teacher extends Model
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
            'nip' => 'string',
            'title_prefix' => 'string',
            'title_suffix' => 'string',
            'last_education' => UserEducation::class,
            'mutation_record' => 'string',
        ];
    }
}
