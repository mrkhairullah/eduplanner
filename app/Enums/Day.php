<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum Day: int
{
    use HasEnumValues;

    case Sunday = 0;
    case Monday = 1;
    case Tuesday = 2;
    case Wednesday = 3;
    case Thursday = 4;
    case Friday = 5;
    case Saturday = 6;
}
