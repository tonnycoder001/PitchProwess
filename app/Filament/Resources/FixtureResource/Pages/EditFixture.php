<?php

namespace App\Filament\Resources\FixtureResource\Pages;

use App\Filament\Resources\FixtureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFixture extends EditRecord
{
    protected static string $resource = FixtureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
