<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Component;

class FormTestNotification extends Component
{
    protected string $view = 'forms.components.form-test-notification';
    public string $formName = "Test Notification";
    public static function make(): static
    {
        return new static();
    }

}
