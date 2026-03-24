<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum ClassFragment: int
{
    use HasEnumValues;

    case CF1 = 1;
    case CF2 = 2;
    case CF3 = 3;
}
