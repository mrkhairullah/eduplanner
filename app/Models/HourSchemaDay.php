<?php

namespace App\Models;

use App\Enums\Day;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'hour_schema_id',
    'day',
    'started_at',
    'finished_at',
])]
class HourSchemaDay extends Model
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

    public function hourSchema(): BelongsTo
    {
        return $this->belongsTo(HourSchema::class);
    }

    public function hours(): HasMany
    {
        return $this->hasMany(Hour::class);
    }
}
