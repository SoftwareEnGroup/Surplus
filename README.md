# Surplus
This project is a PHP website built using Laravel's framework and storing data in a MYSQL datbase. Plus utilising Material Design for bootsrap for a majority of the design.

## Setup
You will need to have Xampp installed beforehand in order to download composer, which you can than install laravel
<br/>https://www.apachefriends.org/index.html
<br/>https://getcomposer.org/ -> `curl -sS https://getcomposer.org/installer | php`
<br/>https://laravel.com/docs/5.6

Note: if composer is installed in repo level then do `mv composer.phar /usr/local/bin/composer` to use `composer` command globally

* Clone the project
* Go to the folder application using cd
* Run composer install on your cmd or terminal
* Copy .env.example file to .env on root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal Ubuntu
* Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. 
* By default, username is root and you can leave password field empty. (This is for Xampp) 
* By default, username is root and password is also root. (This is for Lamp)
* Run php artisan key:generate
* Run php artisan migrate
* Run php artisan serve

Then if you go onto the link for your localhost below, you can view the website
http://127.0.0.1:8000/

## Also need to download
This composer package offers a Twitter Bootstrap optimized flash messaging setup for your Laravel applications.
```
composer require laracasts/flash
```
add the Cashier package for Stripe to your dependencies:
```
composer require "laravel/cashier":"~7.0"
```
In your MYSQL command line you will need to create a database called Surplus

```
CREATE DATABASE Surplus;
```

## Database seed update
Each time you change the content of the database seeds it will not change dynamically as the table has already been built at the start. You will need to do the following in the console:

```
composer dump-autoload
php artisan db:seed
php artisan migrate:refresh --seed
```

For a specific database seed

```
composer dump-autoload
php artisan db:seed --class=UsersTableSeeder
```

# Update Dependencies

```
composer update
```
