<?php

namespace App\Filament\Pages;

use App\Settings\NotificationSettings;
use Filament\Pages\SettingsPage;

class ManageNotification extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = NotificationSettings::class;

    protected function getFormSchema(): array
    {
        return [
            // ...
        ];
    }
}
