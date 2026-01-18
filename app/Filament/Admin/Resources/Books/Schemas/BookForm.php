<?php

namespace App\Filament\Admin\Resources\Books\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->placeholder('Enter book title')
                    ->required(),
                TextInput::make('isbn')
                    ->unique(ignoreRecord: true)
                    ->placeholder('Enter book ISBN')
                    ->required(),
                DatePicker::make('published_year')
                    ->label('Published date')
                    ->default(now())
                    ->native(false)
                    ->placeholder('Enter published year')
                    ->required(),
                TextInput::make('total_copies')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('available_copies')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('author_id')
                    ->placeholder('Enter author ID')
                    ->numeric(),
            ]);
    }
}
