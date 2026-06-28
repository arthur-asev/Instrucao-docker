<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Laravel\Pail\Options;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')

                    ->label('Categoria')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->placeholder('Selecione uma categoria')
                    ->searchable()
                    ->searchPrompt('Buscar categoria de produto')
                    ->required(),
                TextInput::make('brand_id')
                    ->numeric(),
                TextInput::make('sku')
                    ->label('Código do Produto')
                    ->required(),
                TextInput::make('name')->label('Nome')
                    ->required(),
                TextInput::make('slug')->label('Título')
                    ->required(),
                Textarea::make('description')
                    ->label('Descrição')
                    ->columnSpanFull(),
                TextInput::make('cost_price')
                    ->required()
                    ->label('Preço do Produto')
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('sale_price')
                    ->required()
                    ->label('Preço em Promoção')
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('stock')
                    ->required()
                    ->label('Estoque')
                    ->numeric()
                    ->default(0),
                Toggle::make('active')
                    ->label('ativo')
                    ->required(),
            ]);
    }
}
