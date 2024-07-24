<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Player;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\PlayerCategory;
use Filament\Resources\Resource;
use Filament\Tables\Columns\Column;
use Illuminate\Validation\Rules\Enum;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Support\Components\ViewComponent;
use App\Filament\Resources\PlayerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PlayerResource\RelationManagers;

class PlayerResource extends Resource
{
    protected static ?string $model = Player::class;


    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Content';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->label('First Name')
                    ->required(),
                Forms\Components\TextInput::make('last_name')
                    ->label('Last Name')
                    ->required(),
                Forms\Components\TextInput::make('age')
                    ->label('Age')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nationality')
                    ->label('Nationality')
                    ->required(),
                Forms\Components\TextInput::make('foot')
                    ->label('foot')
                    ->required(),
                Forms\Components\TextInput::make('jersey_number')
                    ->label('Jersey Number')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('position')
                    ->label('Position')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->required(),
                Forms\Components\Select::make('category')
                    ->label('Category')
                    ->options([
                        PlayerCategory::MEN => PlayerCategory::getDescription(PlayerCategory::MEN),
                        PlayerCategory::WOMEN => PlayerCategory::getDescription(PlayerCategory::WOMEN),
                        PlayerCategory::ACADEMY => PlayerCategory::getDescription(PlayerCategory::ACADEMY),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('First Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_name')
                    ->label('Last Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('age')
                    ->label('Age')
                    ->sortable()
                    ->numeric(),
                TextColumn::make('nationality')
                    ->label('Nationality')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('foot')
                    ->label('Foot')
                    ->sortable(),
                TextColumn::make('jersey_number')
                    ->label('Jersey Number')
                    ->sortable()
                    ->numeric(),
                TextColumn::make('position')
                    ->label('Position')
                    ->sortable(),
                ImageColumn::make('image')
                    ->label('Image'),
                TextColumn::make('category')
                    ->label('Category')
                    ->sortable(),

            ])


            // ->sortable(),

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
            'index' => Pages\ListPlayers::route('/'),
            'create' => Pages\CreatePlayer::route('/create'),
            'edit' => Pages\EditPlayer::route('/{record}/edit'),
        ];
    }
}
