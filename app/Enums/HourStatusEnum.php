<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum HourStatusEnum: string
{
    use HasEnumValues;

    case Learning = 'BELAJAR';
    case Ceremony = 'UPACARA';
    case Break = 'ISTIRAHAT';
}
