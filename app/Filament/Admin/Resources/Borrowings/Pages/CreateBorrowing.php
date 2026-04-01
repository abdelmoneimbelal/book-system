<?php

namespace App\Filament\Admin\Resources\Borrowings\Pages;

use App\Filament\Admin\Resources\Borrowings\BorrowingResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateBorrowing extends CreateRecord
{
    protected static string $resource = BorrowingResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $borrowing = static::getModel()::create($data);
        $book = $borrowing->book;
        $book->decrement('available_copies');
        $book->status = $book->available_copies > 0 ? 'available' : 'unavailable';
        $book->save();
        return $borrowing;
    } 
}
