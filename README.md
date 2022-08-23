#API with Laravel 9

Base from https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/

Commands

composer update --ignore-platform-reqs

composer require tymon/jwt-auth --ignore-platform-reqs

Generate JWT Secret 

    php artisan jwt:secret

Generate project key

    php artisan key:generate

Create a model

php artisan make:model Order -m

Create a controller with methods

php artisan make:controller ProductController --model=Product --api