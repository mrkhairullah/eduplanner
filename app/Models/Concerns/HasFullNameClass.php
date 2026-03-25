<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasFullNameClass
{
    protected function fullNameClass(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                return implode(' ', [
                    $attributes['level'],
                    $this->majorCompetency->name,
                    $attributes['fragment'],
                ]);
            },
        );
    }
}
