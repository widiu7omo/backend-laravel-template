<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;

class ManageGeneral extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationLabel = "General";
    protected static string $settings = GeneralSettings::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('site_name')
                ->label('Site Name')
                ->required(),
            Toggle::make('site_active')
                ->label('Site Status : Active')->inline(false),
        ];
    }
}
