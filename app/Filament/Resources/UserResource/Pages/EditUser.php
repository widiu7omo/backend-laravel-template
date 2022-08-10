<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model

    {
        $newData = array_merge($data, ['password' => bcrypt($data['password'])]);
        $record->update($newData);
        return $record;
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterCreate()
    {
        activity("Updated User")->log($this->record . " by " . auth()->user()->name);

    }
}
