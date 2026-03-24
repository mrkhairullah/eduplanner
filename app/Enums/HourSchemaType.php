<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum HourSchemaType: string
{
    use HasEnumValues;

    case Learning = 'BELAJAR';
    case Exam = 'UJIAN';
}
