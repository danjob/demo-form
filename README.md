# Simple form with email delivery and database

## Install

-   set absolute path to sqlite file in .env
-   composer install
-   npm install
-   php artisan migrate:fresh --seed
-   npm run dev
-   php artisan serve

<br />

## Functionality

-   After filling out the form, a new user entry will be created in a sqlite database
-   Sending of a confirmation email (here in laravel.log)
-   Show of a success message
