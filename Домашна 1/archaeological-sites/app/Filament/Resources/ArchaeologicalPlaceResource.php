<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArchaeologicalPlaceResource\Pages;
use App\Filament\Resources\ArchaeologicalPlaceResource\RelationManagers;
use App\Models\ArchaeologicalPlace;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArchaeologicalPlaceResource extends Resource
{
    protected static ?string $model = ArchaeologicalPlace::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('city_id')
                    ->relationship('city', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city.name')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListArchaeologicalPlaces::route('/'),
            'create' => Pages\CreateArchaeologicalPlace::route('/create'),
            'view' => Pages\ViewArchaeologicalPlace::route('/{record}'),
            'edit' => Pages\EditArchaeologicalPlace::route('/{record}/edit'),
        ];
    }
}
