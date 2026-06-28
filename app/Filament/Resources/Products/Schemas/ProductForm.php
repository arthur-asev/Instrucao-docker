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
                    ->label('SKU')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('cost_price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('sale_price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}
