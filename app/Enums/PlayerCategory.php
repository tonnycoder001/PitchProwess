<?php

namespace App\Enums;

class PlayerCategory
{
    public const MEN = 'men';
    public const WOMEN = 'women';
    public const ACADEMY = 'academy';

    public static function getDescription($value)
    {
        switch ($value) {
            case self::MEN:
                return 'Men\'s Team';
            case self::WOMEN:
                return 'Women\'s Team';
            case self::ACADEMY:
                return 'Academy';
            default:
                return 'Unknown';
        }
    }

    public static function getLabel($value)
    {
        $labels = [
            self::WOMEN => 'Women',
            self::MEN => 'Men',
            self::ACADEMY => 'Academy',
        ];
        return $labels[$value] ?? 'Unknown';
    }
}
