<?php

namespace App\Filament\Resources\MatchesResource\Pages;

use App\Filament\Resources\MatchesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMatches extends EditRecord
{
    protected static string $resource = MatchesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
