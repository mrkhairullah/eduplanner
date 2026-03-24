<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum UserGender: string
{
    use HasEnumValues;

    case Male = 'Laki-laki';
    case Female = 'Perempuan';
}
