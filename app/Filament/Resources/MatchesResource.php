<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Matches;
use App\Enums\MatchType;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MatchesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MatchesResource\RelationManagers;

class MatchesResource extends Resource
{
    protected static ?string $model = Matches::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Matches';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name'),
                Forms\Components\TextInput::make('home_team')
                    ->label('Home Team')
                    ->required(),
                Forms\Components\TextInput::make('away_team')
                    ->label('Away Team')
                    ->required(),

                Forms\Components\TextInput::make('location')
                    ->label('Location')
                    ->required(),
                Forms\Components\DateTimePicker::make('date')
                    ->label('Date')
                    ->required(),
                Forms\Components\TimePicker::make('time')
                    ->label('Time')
                    ->required(),

                Forms\Components\TextInput::make('results')
                    ->label('Results')
                    ->required(),

                Forms\Components\Select::make('type')
                    ->label('Type')
                    ->options([
                        MatchType::LEAGUE => MatchType::getMatchTypeOptions(MatchType::LEAGUE),
                        MatchType::TOURNAMENT => MatchType::getMatchTypeOptions(MatchType::TOURNAMENT),
                        MatchType::FRIENDLY => MatchType::getMatchTypeOptions(MatchType::FRIENDLY),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('home_team')
                    ->label('Home Team')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('away_team')
                    ->label('Away Team')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('location')
                    ->label('Location')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('date')
                    ->label('Date')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('time')
                    ->label('Time')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('results')
                    ->label('Results')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('type')
                    ->label('Type')
                    ->sortable(),

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
