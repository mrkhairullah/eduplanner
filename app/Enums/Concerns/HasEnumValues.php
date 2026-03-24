<?php

namespace App\Enums\Concerns;

trait HasEnumValues
{
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function keys(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function options(): array
    {
        return array_column(self::cases(), 'value', 'name');
    }

    public static function isValid(string|int $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
