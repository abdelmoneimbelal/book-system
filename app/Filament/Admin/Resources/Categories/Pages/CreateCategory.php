<?php

namespace App\Filament\Admin\Resources\Categories\Pages;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Admin\Resources\Categories\CategoryResource;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['name'], '-') . '-' . Str::random(5);

        return $data;
    }

    // protected function handleRecordCreation(array $data): Model
    // {
    //     $category = Category::create($data);

    //     return $category;
    // }
}
