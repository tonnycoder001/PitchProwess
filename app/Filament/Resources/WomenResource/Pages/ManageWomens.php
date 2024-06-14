<?php

namespace App\Filament\Resources\WomenResource\Pages;

use App\Filament\Resources\WomenResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWomens extends ManageRecords
{
    protected static string $resource = WomenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
