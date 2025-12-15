<?php

namespace App\Filament\Admin\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->placeholder('Category Name')
                    ->required()
                    ->label('Category Name')
                    ->columnSpanFull()
                    ->rules([
                        'required',
                        'max:255',
                    ]),
            ]);
    }
}
