<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SponsershipResource\Pages;
use App\Filament\Resources\SponsershipResource\RelationManagers;
use App\Models\Sponsership;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SponsershipResource extends Resource
{
    protected static ?string $model = Sponsership::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Form\Components\TextInput::make('sponsor_name')->required(),
                Form\Components\TextInput::make('email')->email(),
                Form\Components\TextInput::make('phone'),
                Form\Components\TextInput::make('company_name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSponserships::route('/'),
            'create' => Pages\CreateSponsership::route('/create'),
            'edit' => Pages\EditSponsership::route('/{record}/edit'),
        ];
    }    
}
