<?php

namespace App\Filament\Admin\Resources\Categories\Pages;

use App\Filament\Admin\Resources\Categories\CategoryResource;
use App\Models\Category;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['name'], '-').'-'.Str::random(5);

        return $data;
    }

    // protected function getCreatedNotificationTitle(): ?string
    // {
    //     return 'Category created successfully';
    // }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Category created')
            ->body('The category <strong>'.$this->getRecord()->name.'</strong> has been created successfully.')
            ->icon(Heroicon::ListBullet);
    }

    protected function preserveFormDataWhenCreatingAnother(array $data): array
    {
        return [
            'name' => $data['name'],
            'slug' => '',
        ];
    }

    // protected function getRedirectUrl(): string
    // {
    //     return CategoryResource::getUrl('index');
    //     // return $this->getResource()::getUrl('index');
    //     // return $this->previousUrl ?? $this->getResource()::getUrl('index');
    // }

    // protected function handleRecordCreation(array $data): Model
    // {
    //     $category = Category::create($data);

    //     return $category;
    // }
}
