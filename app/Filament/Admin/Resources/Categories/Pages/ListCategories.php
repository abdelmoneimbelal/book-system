<?php

namespace App\Filament\Admin\Resources\Categories\Pages;

use App\Filament\Admin\Resources\Categories\CategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Category;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

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
        ->icon('heroicon-o-list-bullet')
        ->badge(Category::count())
        ->badgeTooltip('Total Categories')
        ->badgeColor('success'),
        'active' => Tab::make()
            ->icon('heroicon-o-check-circle')
            ->badge(Category::where('status', 'active')->count()) 
            ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'active')),
        'inactive' => Tab::make()
            ->icon('heroicon-o-x-circle')
            ->badge(Category::where('status', 'inactive')->count()) 
            ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'inactive')),
    ];
}
}
