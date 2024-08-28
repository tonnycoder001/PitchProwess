<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Fixture;
use App\Models\Standing;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StandingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StandingResource\RelationManagers;

class StandingResource extends Resource
{
    protected static ?string $model = Standing::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';
    protected static ?string $navigationGroup = 'Content';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('team_name')
                    ->options(function () {
                        $homeTeams = Fixture::pluck('home_team')->toArray();
                        $awayTeams = Fixture::pluck('away_team')->toArray();
                        $teams = array_unique(array_merge($homeTeams, $awayTeams));

                        return array_combine($teams, $teams);
                    })
                    ->searchable()
                    ->label('Team')
                    ->required(),
                TextInput::make('games_played')
                    ->numeric()
                    ->required(),
                TextInput::make('wins')
                    ->numeric()
                    ->required(),
                TextInput::make('draws')
                    ->numeric()
                    ->required(),
                TextInput::make('losses')
                    ->numeric()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('team_name')->label('Team'),
                Tables\Columns\TextColumn::make('games_played')->label('Games Played'),
                Tables\Columns\TextColumn::make('wins')->label('Wins'),
                Tables\Columns\TextColumn::make('draws')->label('Draws'),
                Tables\Columns\TextColumn::make('losses')->label('Losses'),
                Tables\Columns\TextColumn::make('points')->label('Points'),
                Tables\Columns\TextColumn::make('goal_difference')->label('goal_difference'),
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
            'index' => Pages\ListStandings::route('/'),
            'create' => Pages\CreateStanding::route('/create'),
            'edit' => Pages\EditStanding::route('/{record}/edit'),
        ];
    }
}
