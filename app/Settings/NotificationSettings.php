<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class NotificationSettings extends Settings
{
    //Settings key pair values
    public string $firebase_api_key;
    public string $firebase_auth_domain;
    public string $firebase_database_url;
    public string $firebase_project_id;
    public string $firebase_storage_bucket;
    public string $firebase_messaging_sender_id;
    public string $firebase_app_id;
    public string $firebase_measurement_id;
    public static function group(): string
    {
        return 'notifications';
    }
}
