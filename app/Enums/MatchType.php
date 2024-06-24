<?php

namespace App\Enums;


class MatchType

{
    public const LEAGUE = 'league';
    public const TOURNAMENT = 'tournament';
    public const FRIENDLY = 'friendly';


    public static function getMatchTypeOptions($value): array
    {
        return [
            MatchType::LEAGUE => 'League',
            MatchType::TOURNAMENT => 'Tournament',
            MatchType::FRIENDLY => 'Friendly',
        ];
    }

    public static function getLabel($value)
    {
        $labels = [
            MatchType::LEAGUE => 'League',
            MatchType::TOURNAMENT => 'Tournament',
            MatchType::FRIENDLY => 'Friendly',
        ];
    }
}
