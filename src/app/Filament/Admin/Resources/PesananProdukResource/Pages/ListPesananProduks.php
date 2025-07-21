<?php

namespace App\Filament\Admin\Resources\PesananProdukResource\Pages;

use App\Filament\Admin\Resources\PesananProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPesananProduks extends ListRecords
{
    protected static string $resource = PesananProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
