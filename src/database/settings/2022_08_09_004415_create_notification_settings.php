<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateNotificationSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('notifications.firebase_api_key', '');
        $this->migrator->add('notifications.firebase_auth_domain', '');
        $this->migrator->add('notifications.firebase_database_url', '');
        $this->migrator->add('notifications.firebase_project_id', '');
        $this->migrator->add('notifications.firebase_storage_bucket', '');
        $this->migrator->add('notifications.firebase_messaging_sender_id', '');
        $this->migrator->add('notifications.firebase_app_id', '');
        $this->migrator->add('notifications.firebase_measurement_id', '');
    }
}
