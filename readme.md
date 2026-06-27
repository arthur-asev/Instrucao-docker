comandos para iniciar 

docker compose up 

mkdir app

composer create-project laravel/laravel .

composer require filament/filament
php artisan filament:upgrade
php artisan make:filament-panel admin

