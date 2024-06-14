<?php

namespace App\Filament\Resources\AcademyPlayerResource\Pages;

use App\Filament\Resources\AcademyPlayerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAcademyPlayers extends ManageRecords
{
    protected static string $resource = AcademyPlayerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
