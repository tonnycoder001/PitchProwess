<?php

namespace App\Enums;

enum TeamType: string
{
    case MEN = 'men';
    case WOMEN = 'women';
    case ACADEMY = 'academy';

    public static function labels(): array
    {
        return [
            self::MEN->value => 'Men',
            self::WOMEN->value => 'Women',
            self::ACADEMY->value => 'Academy',
        ];
    }
}
