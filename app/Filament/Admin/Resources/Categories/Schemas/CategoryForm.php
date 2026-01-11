<?php

namespace App\Filament\Admin\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

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
                    // ->inlineLabel()
                    ->default(old('name'))
                    // ->prefix('https://')
                    // ->suffix('.com')
                    ->autofocus()
                    ->belowContent('Category name is required')                    
                    ->rules([
                        'required',
                        'max:255',  
                    ]),
                Select::make('status')
                    ->options(['active' => 'Active', 'inactive' => 'Inactive'])
                    ->default('active'),
            ])
            ->columns(2);
    }
}
