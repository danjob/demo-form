# Simple form with email delivery and sqlite for demo purpose

## Install

-   set absolute path to sqlite file in .env
-   composer install
-   npm install
-   php artisan migrate:fresh --seed
-   npm run dev
-   php artisan serve

<br />

## Functionality

-   After filling out the form, a new user will be created in a sqlite db with a success message.
-   Sending a confirmation email in storage/logs/laravel.log.
