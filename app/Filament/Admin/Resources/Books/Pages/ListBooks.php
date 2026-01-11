<?php

namespace App\Filament\Admin\Resources\Books\Pages;

use App\Filament\Admin\Resources\Books\BookResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Book;

class ListBooks extends ListRecords
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->icon('heroicon-o-book-open')
                ->badge(Book::count())
                ->badgeTooltip('Total Books')
                ->badgeColor('secondary'),
            'available' => Tab::make()
                ->icon('heroicon-o-check-circle')
                ->badge(Book::where('status', 'available')->count())
                ->badgeTooltip('Available Books')
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('available_copies', '>', 0)),
            'unavailable' => Tab::make()
                ->icon('heroicon-o-x-circle')
                ->badge(Book::where('status', 'unavailable')->count())
                ->badgeTooltip('Unavailable Books')
                ->badgeColor('danger')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('available_copies', '=', 0)),
        ];
    }

}
