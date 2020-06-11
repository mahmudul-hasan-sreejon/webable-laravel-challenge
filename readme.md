# WebAble Laravel Challenge

## Installation

3.1- Clone project via git repository and setup environment and config file

3.2- Rename or copy '.env.local' to '.env' and change database connection information

3.3- Create database 'laravel-film-app'

3.4- Use these commands in terminal in the root of project folder to setup the project:
```
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
```

3.5- Use the following command in terminal in the root of project folder to run the project:
```
php artisan serve
```