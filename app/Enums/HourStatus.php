<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum HourStatus: string
{
    use HasEnumValues;

    case Learning = 'BELAJAR';
    case Ceremony = 'UPACARA';
    case Break = 'ISTIRAHAT';
}
