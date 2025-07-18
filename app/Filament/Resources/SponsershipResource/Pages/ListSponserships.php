<?php

namespace App\Filament\Resources\SponsershipResource\Pages;

use App\Filament\Resources\SponsershipResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSponserships extends ListRecords
{
    protected static string $resource = SponsershipResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
