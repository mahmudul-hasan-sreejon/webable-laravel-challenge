# WebAble Laravel Challenge

## Installation

- Clone project via git repository

- Rename or copy '.env.local' to '.env' and change database connection information

- Create database 'laravel-film-app'

- Use these commands in terminal in the root of project folder to setup the project:
```
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
```

- Use the following command in terminal in the root of project folder to run the project:
```
php artisan serve
```