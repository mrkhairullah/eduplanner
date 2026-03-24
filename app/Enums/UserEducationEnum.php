<?php

namespace App\Enums;

use App\Enums\Concerns\HasEnumValues;

enum UserEducationEnum: string
{
    use HasEnumValues;

    case ElementarySchool = 'SD';
    case IslamicElementarySchool = 'MI';
    case JuniorHighSchool = 'SMP';
    case IslamicJuniorHighSchool = 'MTs';
    case SeniorHighSchool = 'SMA';
    case IslamicSeniorHighSchool = 'MA';
    case VocationalSchool = 'SMK';
    case IslamicVocationalSchool = 'MAK';
    case Diploma1 = 'D1';
    case Diploma2 = 'D2';
    case Diploma3 = 'D3';
    case Diploma4 = 'D4';
    case Bachelor = 'S1';
    case Master = 'S2';
    case Doctorate = 'S3';
}
