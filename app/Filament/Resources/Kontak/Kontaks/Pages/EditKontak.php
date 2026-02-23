<?php

namespace App\Filament\Resources\Kontak\Kontaks\Pages;

use App\Filament\Resources\Kontak\Kontaks\KontakResource;
use Filament\Resources\Pages\EditRecord;
use App\Models\Kontak;

class EditKontak extends EditRecord
{
    protected static string $resource = KontakResource::class;

    public function mount($record = null): void
    {
        $kontak = Kontak::first();

        if (! $kontak) {
            $this->redirect(KontakResource::getUrl('create'));
            return;
        }

        parent::mount($kontak->id);
    }

    
    public function getBreadcrumbs(): array
    {
        return [];
    }

    
    protected function getHeaderActions(): array
    {
        return [];
    }

    
    protected function getFormActions(): array
    {
        return [
            $this->getSaveFormAction(),
        ];
    }

   
    public function getTitle(): string
    {
        return 'Pengaturan Kontak';
    }
}
