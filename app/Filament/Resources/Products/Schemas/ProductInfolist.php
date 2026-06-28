<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('category_id')
                    ->numeric(),
                TextEntry::make('brand_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('sku')
                    ->label('SKU'),
                TextEntry::make('name')->label('Nome'),
                TextEntry::make('slug'),
                TextEntry::make('description')
                    ->label('Descrição')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('cost_price')
                    ->label('Custo')
                    ->money(),
                TextEntry::make('sale_price')
                    ->label('Custo em Promoção')
                    ->money(),
                TextEntry::make('stock')
                    ->label('Estoque')
                    ->numeric(),
                IconEntry::make('active')
                    ->label('Ativo')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->label('Criado Em: ')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Editado Em: ')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
