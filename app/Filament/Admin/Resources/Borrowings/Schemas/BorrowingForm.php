<?php

namespace App\Filament\Admin\Resources\Borrowings\Schemas;

use App\Models\Book;
use App\Models\Borrower;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class BorrowingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('borrower_id')
                    ->label('Borrower')
                    ->options(Borrower::all()->pluck('name', 'id'))
                    ->placeholder('Select borrower')
                    ->searchable()
                    ->required(),
                Select::make('book_id')
                    ->label('Book')
                    ->options(Book::all()->pluck('title', 'id'))
                    ->placeholder(placeholder: 'Select book')
                    ->searchable()
                    ->required(),
                DateTimePicker::make('borrowed_at')
                    ->default(now())
                    ->required(),
                Select::make('status')
                    ->options(['borrowed' => 'Borrowed', 'returned' => 'Returned'])
                    ->default('borrowed')
                    ->placeholder('Select status')
                    ->required(),
            ]);
    }
}
