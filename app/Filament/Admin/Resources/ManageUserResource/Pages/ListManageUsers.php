<?php

namespace App\Filament\Admin\Resources\ManageUserResource\Pages;

use App\Filament\Admin\Resources\ManageUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListManageUsers extends ListRecords
{
    protected static string $resource = ManageUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
