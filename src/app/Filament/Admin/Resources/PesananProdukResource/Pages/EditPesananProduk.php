<?php

namespace App\Filament\Admin\Resources\PesananProdukResource\Pages;

use App\Filament\Admin\Resources\PesananProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesananProduk extends EditRecord
{
    protected static string $resource = PesananProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
