#API with Laravel 9

Base from https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/

Commands

composer require tymon/jwt-auth --ignore-platform-reqs

Create a model

php artisan make:model Order -m

Create a controller with methods

php artisan make:controller OrderController --model=Product --api