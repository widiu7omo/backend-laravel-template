<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSetting;
use App\Settings\GeneralSettings;
use Filament\Pages\SettingsPage;

class ManageGeneral extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = GeneralSettings::class;

    protected function getFormSchema(): array
    {
        return [
            // ...
        ];
    }
}
