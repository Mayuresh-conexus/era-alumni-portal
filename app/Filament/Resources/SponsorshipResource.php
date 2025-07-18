<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SponsorshipResource\Pages;
use App\Filament\Resources\SponsorshipResource\RelationManagers;
use App\Models\Sponsorship;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class SponsorshipResource extends Resource
{
    protected static ?string $model = Sponsorship::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Payments';
    protected static function getNavigationBadge(): ?string
        {
        return static::getModel()::count();
        }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('sponsor_name')->required(),
            TextInput::make('email')->email()->nullable(),
            TextInput::make('phone')->nullable(),
            FileUpload::make('featured_image')->image()->directory('sponsorship-images'),
            TextInput::make('company_name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sponsor_name')->searchable(),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('company_name'),
                ImageColumn::make('featured_image')->circular(),
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
            'index' => Pages\ListSponsorships::route('/'),
            'create' => Pages\CreateSponsorship::route('/create'),
            'edit' => Pages\EditSponsorship::route('/{record}/edit'),
        ];
    }    
}
