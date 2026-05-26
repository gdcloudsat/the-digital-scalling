<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $whatsapp_number;
    public string $whatsapp_message;
    public bool $popup_enabled;
    public string $popup_title;
    public string $popup_description;
    public int $popup_delay;

    public static function group(): string
    {
        return 'general';
    }
}
