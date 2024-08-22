<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Standing;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
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
                TextInput::make('position')
                    ->required()
                    ->numeric()
                    ->label('Position'),
                TextInput::make('club_name')
                    ->required()
                    ->label('Club Name'),
                TextInput::make('played')
                    ->required()
                    ->numeric()
                    ->label('Played'),
                TextInput::make('won')
                    ->required()
                    ->numeric()
                    ->label('Won'),
                TextInput::make('drawn')
                    ->required()
                    ->numeric()
                    ->label('Drawn'),
                TextInput::make('lost')
                    ->required()
                    ->numeric()
                    ->label('Lost'),
                TextInput::make('goal_difference')
                    ->required()
                    ->numeric()
                    ->label('Goal Difference'),
                TextInput::make('points')
                    ->required()
                    ->numeric()
                    ->label('Points'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('position')->label('position'),
                TextColumn::make('club_name')->label('Club Name'),
                TextColumn::make('played')->label('Played'),
                TextColumn::make('won')->label('Won'),
                TextColumn::make('drawn')->label('Drawn'),
                TextColumn::make('lost')->label('Lost'),
                TextColumn::make('goal_difference')->label('Goal Difference'),
                TextColumn::make('points')->label('Points'),
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
