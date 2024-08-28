<?php

namespace App\Enums;

enum MatchType: string
{
    case LEAGUE = 'league';
    case TOURNAMENT = 'tournament';
    case FRIENDLY = 'friendly';

    public static function labels(): array
    {
        return [
            self::LEAGUE->value => 'League',
            self::TOURNAMENT->value => 'Tournament',
            self::FRIENDLY->value => 'Friendly',
        ];
    }
}
