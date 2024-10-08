<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Team;
use Filament\Tables;
use App\Enums\TeamType;
use App\Models\Fixture;
use App\Enums\MatchType;
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
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                Select::make('home_team_id')
                    ->label('Home Team')
                    ->options(Team::pluck('name', 'id'))
                    ->required(),

                Select::make('away_team_id')
                    ->label('Away Team')
                    ->options(Team::pluck('name', 'id'))
                    ->required(),
                TextInput::make('location')->required(),
                DateTimePicker::make('date')->required(),
                DateTimePicker::make('time')->required(),
                Select::make('type')
                    ->options(MatchType::labels())
                    ->required(),
                Select::make('team')
                    ->options(TeamType::labels())
                    ->required(),
                TextInput::make('home_team_score')
                    ->label('Home Team Score')
                    ->numeric(),
                TextInput::make('away_team_score')
                    ->label('Away Team Score')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('homeTeam.name')->label('Home Team')->sortable(),
                TextColumn::make('awayTeam.name')->label('Away Team')->sortable(),
                TextColumn::make('location')->sortable()->searchable(),
                TextColumn::make('date')->sortable(),
                TextColumn::make('time')->sortable(),
                TextColumn::make('type')->sortable(),
                TextColumn::make('team')->sortable(),
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
