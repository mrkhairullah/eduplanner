<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum UserGenderEnum: string
{
    use HasEnumValues;

    case Male = 'LAKI-LAKI';
    case Female = 'PEREMPUAN';
}
