<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class FormNotificationTest extends Component implements HasForms
{
    use InteractsWithForms;

    public string $notificationSent = "belum";

    public function sendNotification()
    {
        $this->notificationSent = "sudah";
    }

    public function mount()
    {
        $this->form->fill([
            'title' => "This is title for notification",
            'body' => "This is content that you want to send to user",
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label('Title')
                ->required()->columnSpan(1),
            Textarea::make('body')->rows(5)
                ->label('Body')
                ->required()->columnSpan(12),
        ];
    }

    public function render()
    {
        return view('livewire.form-notification-test');
    }
}
