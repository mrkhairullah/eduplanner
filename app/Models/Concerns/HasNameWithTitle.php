<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasNameWithTitle
{
    protected function nameWithTitle(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                return implode(' ', [
                    $attributes['title_prefix'],
                    $this->user->name,
                    $attributes['title_suffix'],
                ]);
            },
        );
    }
}
