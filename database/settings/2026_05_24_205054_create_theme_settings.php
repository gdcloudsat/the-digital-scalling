<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('theme.primary_color', '#f53003');
        $this->migrator->add('theme.secondary_color', '#000000');
        $this->migrator->add('theme.background_color', '#FDFDFC');
        $this->migrator->add('theme.text_color', '#000000');
        
        $this->migrator->add('theme.dark_primary_color', '#f53003');
        $this->migrator->add('theme.dark_secondary_color', '#ffffff');
        $this->migrator->add('theme.dark_background_color', '#000000');
        $this->migrator->add('theme.dark_text_color', '#ffffff');
    }
};
