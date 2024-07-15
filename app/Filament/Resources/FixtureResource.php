<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Fixture;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\FixtureResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FixtureResource\RelationManagers;

class FixtureResource extends Resource
{
    protected static ?string $model = Fixture::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('home_team')->required(),
                TextInput::make('away_team')->required(),
                TextInput::make('location')->required(),
                DateTimePicker::make('date')->required(),
                DateTimePicker::make('time')->required(),
                Select::make('type')
                    ->options([
                        'league' => 'League',
                        'tournament' => 'Tournament',
                        'friendly' => 'Friendly',
                    ])
                    ->required(),
                Select::make('team')
                    ->options([
                        'men' => 'men',
                        'women' => 'women',
                        'academy' => 'academy',
                    ])
                    ->required(),
                TextInput::make('results'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('home_team')->sortable()->searchable(),
                TextColumn::make('away_team')->sortable()->searchable(),
                TextColumn::make('location')->sortable()->searchable(),
                TextColumn::make('date')->sortable(),
                TextColumn::make('time')->sortable(),
                TextColumn::make('type')->sortable(),
                TextColumn::make('team')->sortable(),
                TextColumn::make('results'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFixtures::route('/'),
            'create' => Pages\CreateFixture::route('/create'),
            'edit' => Pages\EditFixture::route('/{record}/edit'),
        ];
    }
}
