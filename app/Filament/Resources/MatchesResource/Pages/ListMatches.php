<?php

namespace App\Filament\Resources\MatchesResource\Pages;

use App\Filament\Resources\MatchesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMatches extends ListRecords
{
    protected static string $resource = MatchesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
