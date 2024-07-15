<?php

namespace App\Filament\Resources\FixtureResource\Pages;

use App\Filament\Resources\FixtureResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFixture extends CreateRecord
{
    protected static string $resource = FixtureResource::class;
}
