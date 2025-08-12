<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected array $updatedRoles = [];

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->updatedRoles = $data['roles'] ?? [];
        unset($data['roles']);
        return $data;
    }

    protected function afterSave(): void
    {
        if ($this->record && $this->data['roles'] ?? false) {
            $this->record->syncRoles($this->data['roles']);
        }
    }

}
