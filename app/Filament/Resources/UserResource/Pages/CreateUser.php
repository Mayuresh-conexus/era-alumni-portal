<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected array $createdRoles = [];

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Pull roles out of the incoming data so normal model creation doesn't try to set it
        $this->createdRoles = $data['roles'] ?? [];
        unset($data['roles']);
        return $data;
    }

        protected function afterCreate(): void
    {
        if ($this->record && $this->data['roles'] ?? false) {
            $this->record->syncRoles($this->data['roles']);
        }
    }
}
