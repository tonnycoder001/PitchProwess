<?php

namespace App\Filament\Resources\StandingResource\Pages;

use App\Filament\Resources\StandingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStandings extends ListRecords
{
    protected static string $resource = StandingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
