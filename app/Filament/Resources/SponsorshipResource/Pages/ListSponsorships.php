<?php

namespace App\Filament\Resources\SponsorshipResource\Pages;

use App\Filament\Resources\SponsorshipResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSponsorships extends ListRecords
{
    protected static string $resource = SponsorshipResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
