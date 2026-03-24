<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum UserReligion: string
{
    use HasEnumValues;

    case Islam = 'Islam';
    case Catholic = 'Katolik';
    case Protestant = 'Kristen Protestan';
    case Buddhism = 'Buddha';
    case Hinduism = 'Hindu';
    case Confucianism = 'Khonghucu';
}
