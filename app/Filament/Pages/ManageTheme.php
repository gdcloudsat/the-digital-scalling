<?php

namespace App\Filament\Pages;

use App\Settings\ThemeSettings;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageTheme extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-paint-brush';

    protected static string $settings = ThemeSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Theme')
                    ->tabs([
                        Tabs\Tab::make('Light Mode')
                            ->schema([
                                Section::make('Colors')
                                    ->schema([
                                        ColorPicker::make('primary_color')
                                            ->required(),
                                        ColorPicker::make('secondary_color')
                                            ->required(),
                                        ColorPicker::make('background_color')
                                            ->required(),
                                        ColorPicker::make('text_color')
                                            ->required(),
                                    ])->columns(2),
                            ]),
                        Tabs\Tab::make('Dark Mode')
                            ->schema([
                                Section::make('Colors')
                                    ->schema([
                                        ColorPicker::make('dark_primary_color')
                                            ->label('Primary Color')
                                            ->required(),
                                        ColorPicker::make('dark_secondary_color')
                                            ->label('Secondary Color')
                                            ->required(),
                                        ColorPicker::make('dark_background_color')
                                            ->label('Background Color')
                                            ->required(),
                                        ColorPicker::make('dark_text_color')
                                            ->label('Text Color')
                                            ->required(),
                                    ])->columns(2),
                            ]),
                    ]),
            ]);
    }
}
