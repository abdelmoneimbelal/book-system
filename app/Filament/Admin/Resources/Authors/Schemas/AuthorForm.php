<?php

namespace App\Filament\Admin\Resources\Authors\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->columnSpanFull()
                    ->required(),
                // Textarea::make('bio')
                //     ->columnSpanFull()
                //     ->rows(5),
                RichEditor::make('bio')
                    ->placeholder('Enter author bio')
                    ->extraAttributes([
                        'style' => 'height: 200px;',
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
