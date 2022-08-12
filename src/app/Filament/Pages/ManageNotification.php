<?php

namespace App\Filament\Pages;

use App\Forms\Components\FormTestNotification;
use App\Settings\NotificationSettings;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;

class ManageNotification extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationLabel = "Notification";
    protected static string $settings = NotificationSettings::class;

    protected function getFormSchema(): array
    {
        return [
            Card::make([Fieldset::make("Push Notification")->schema([
                Toggle::make("push_notification_global_active")->label("Push Notification"),
                Toggle::make("push_notification_order_active")->label("Notify Order Status"),
                Toggle::make("push_notification_payment_active")->label("Notify Payment Status"),
            ])->columns(3),
                Fieldset::make("Firebase Configuration")->schema(
                    [
                        TextInput::make('firebase_api_key')
                            ->label('Firebase API Key')
                            ->required(),
                        TextInput::make('firebase_auth_domain')
                            ->label('Firebase Auth Domain')
                            ->required(),
                        TextInput::make('firebase_database_url')
                            ->label('Firebase Database URL')
                            ->required(),
                        TextInput::make('firebase_project_id')
                            ->label('Firebase Project ID')
                            ->required(),
                        TextInput::make('firebase_storage_bucket')
                            ->label('Firebase Storage Bucket')
                            ->required(),
                        TextInput::make('firebase_messaging_sender_id')
                            ->label('Firebase Message Sender ID')
                            ->required(),
                        TextInput::make('firebase_app_id')
                            ->label('Firebase App ID')
                            ->required(),
                        TextInput::make('firebase_measurement_id')
                            ->label('Firebase Measurement ID')
                            ->required()
                    ]
                )->columns(3)]),
            Fieldset::make("Test Notification")->schema([
                FormTestNotification::make()->columnSpan(12)
            ])->columns(3)->withAttributes(['class' => 'bg-white mb-4 mt-4 pt-8']),
        ];
    }
}
