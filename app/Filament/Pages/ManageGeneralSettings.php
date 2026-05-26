<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageGeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('WhatsApp Integration')
                    ->schema([
                        TextInput::make('whatsapp_number')
                            ->placeholder('e.g. +1234567890'),
                        TextInput::make('whatsapp_message')
                            ->maxLength(255),
                    ]),
                Section::make('Popup Lead System')
                    ->schema([
                        Toggle::make('popup_enabled')
                            ->label('Enable Popup'),
                        TextInput::make('popup_title')
                            ->required(),
                        TextInput::make('popup_description'),
                        TextInput::make('popup_delay')
                            ->numeric()
                            ->suffix('seconds')
                            ->default(5),
                    ]),
            ]);
    }
}
