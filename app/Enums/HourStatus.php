<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum HourStatus: string
{
    use HasEnumValues;

    case Learn = 'Belajar';
    case Ceremony = 'Upacara';
    case Rest = 'Istirahat';
}
