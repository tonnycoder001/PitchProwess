<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Matches;
use App\Enums\MatchType;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MatchesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MatchesResource\RelationManagers;

class MatchesResource extends Resource
{
    protected static ?string $model = Matches::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('home_team_id')
                    ->label('Home Team')
                    ->relationship('homeTeam', 'name')
                    ->required(),

                Forms\Components\Select::make('away_team_id')
                    ->label('Away Team')
                    ->relationship('awayTeam', 'name')
                    ->required(),

                Forms\Components\TextInput::make('home_team_score')
                    ->label('Home Team Score')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('away_team_score')
                    ->label('Away Team Score')
                    ->numeric()
                    ->required(),



                Forms\Components\Select::make('type')
                    ->label('Match Type')
                    ->options([
                        'league' => 'League',
                        'tournament' => 'Tournament',
                        'friendly' => 'Friendly',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('homeTeam.name')
                    ->label('Home Team'),

                Tables\Columns\TextColumn::make('awayTeam.name')
                    ->label('Away Team'),

                Tables\Columns\TextColumn::make('home_team_score')
                    ->label('Home Team Score'),

                Tables\Columns\TextColumn::make('away_team_score')
                    ->label('Away Team Score'),


                Tables\Columns\TextColumn::make('type')
                    ->label('Match Type'),

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
            'index' => Pages\ListMatches::route('/'),
            'create' => Pages\CreateMatches::route('/create'),
            'edit' => Pages\EditMatches::route('/{record}/edit'),
        ];
    }
}
