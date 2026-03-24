<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum HourSchemaTypeEnum: string
{
    use HasEnumValues;

    case Learning = 'BELAJAR';
    case Exam = 'UJIAN';
}
