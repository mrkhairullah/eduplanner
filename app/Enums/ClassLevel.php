<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum ClassLevel: int
{
    use HasEnumValues;

    case CL10 = 10;
    case CL11 = 11;
    case CL12 = 12;
}
