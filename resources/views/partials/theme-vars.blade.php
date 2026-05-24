@php
    $themeSettings = app(\App\Settings\ThemeSettings::class);
@endphp

<style>
    :root {
        --primary-color: {{ $themeSettings->primary_color }};
        --secondary-color: {{ $themeSettings->secondary_color }};
        --background-color: {{ $themeSettings->background_color }};
        --text-color: {{ $themeSettings->text_color }};
    }

    .dark {
        --primary-color: {{ $themeSettings->dark_primary_color }};
        --secondary-color: {{ $themeSettings->dark_secondary_color }};
        --background-color: {{ $themeSettings->dark_background_color }};
        --text-color: {{ $themeSettings->dark_text_color }};
    }
</style>
