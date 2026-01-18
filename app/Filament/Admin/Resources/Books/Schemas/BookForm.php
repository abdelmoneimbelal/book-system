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
                    ->placeholder('Enter book ISBN')
                    ->required(),
                DatePicker::make('published_year')
                    ->placeholder('Enter published year')
                    ->required(),
                TextInput::make('total_copies')
                    ->placeholder('Enter total copies')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('available_copies')
                    ->placeholder('Enter available copies')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('author_id')
                    ->placeholder('Enter author ID')
                    ->numeric(),
            ]);
    }
}
