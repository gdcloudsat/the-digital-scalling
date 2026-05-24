<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ThemeSettings extends Settings
{
    public string $primary_color;
    public string $secondary_color;
    public string $background_color;
    public string $text_color;
    
    public string $dark_primary_color;
    public string $dark_secondary_color;
    public string $dark_background_color;
    public string $dark_text_color;

    public static function group(): string
    {
        return 'theme';
    }
}
