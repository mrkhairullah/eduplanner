<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum UserReligion: string
{
    use HasEnumValues;

    case Islam = 'ISLAM';
    case Catholic = 'KATOLIK';
    case Protestant = 'KRISTEN PROTESTAN';
    case Buddhism = 'BUDDHA';
    case Hinduism = 'HINDU';
    case Confucianism = 'KHONGHUCU';
}
