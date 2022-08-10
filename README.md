## Changelog

### Filament -> Operation

    - Create Page CRUD
    - Create Page List

### Spatie Laravel Role - Permission

### Spatie Setting & Filament Setting Plugin

Operation

- Create Setting Migration
  `php artisan make:settings-migration CreateNotificationSettings`
- Create Setting File

```php   
namespace App\Settings;
use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
public string $site_name;

    public bool $site_active;

    public static function group(): string
    {
        return 'general';
    }
}
```
- Add created Setting i.e `GeneralSettings::class` file to `config/settings.php`
- Create Setting View Filament

```php
php artisan make:filament-settings-page ManageGeneral GeneralSettings
```
- Custom theme, edit file inside resource/css/filament.css make sure env variable TAILWIND_CONFIG is same with css name
- Create Custom component livewire as layout -> wrapper of fields/ form
create layout with this command 
```php 
php artisan make:form-layout
```
it will create two file inside `app/Forms/Components` and `resources/forms`
you can edit view from resource and also you can pass livewire component with tag `livewire:component-name`
- Create Livewire Component

```php
php artisan make:livewire
```
