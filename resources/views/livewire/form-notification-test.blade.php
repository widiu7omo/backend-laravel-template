<div>
    <div class="pb-6">
        {{$this->form}}
    </div>
    <a href="javascript:void(0)" wire:click='$set("notificationSent","sudah dikirim")'
       class="inline-flex items-center justify-center py-1 gap-4 font-medium rounded-lg border transition-colors focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset filament-button min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 filament-page-button-action">
        Test Notification
    </a>
</div>
