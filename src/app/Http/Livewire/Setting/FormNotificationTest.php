<?php

namespace App\Http\Livewire\Setting;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Livewire\Component;

class FormNotificationTest extends Component implements HasForms
{
    use InteractsWithForms;

    public string $title = "";
    public string $body = "";

    public function sendNotification()
    {
        return Notification::make("test_notification")
            ->icon('heroicon-o-shopping-bag')
            ->title($this->title)
            ->body($this->body)
            ->success()->sendToDatabase(auth()->user());
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
        return view('livewire.setting.form-notification-test');
    }
}
