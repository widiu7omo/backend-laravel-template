<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    //example log
//    protected function afterCreate(): void
//    {
//        activity("Created User")->log($this->record . " by " . auth()->user()->name);
//    }
}
