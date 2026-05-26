<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.whatsapp_number', '');
        $this->migrator->add('general.whatsapp_message', 'Hello, I am interested in your services.');
        $this->migrator->add('general.popup_enabled', false);
        $this->migrator->add('general.popup_title', 'Subscribe to our newsletter');
        $this->migrator->add('general.popup_description', 'Get the latest updates and offers.');
        $this->migrator->add('general.popup_delay', 5);
    }
};
