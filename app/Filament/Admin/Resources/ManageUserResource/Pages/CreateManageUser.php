<?php

namespace App\Filament\Admin\Resources\ManageUserResource\Pages;

use App\Filament\Admin\Resources\ManageUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateManageUser extends CreateRecord
{
    protected static string $resource = ManageUserResource::class;
}
