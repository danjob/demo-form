# Simple form with email delivery and database

![demo](https://private-user-images.githubusercontent.com/12426218/280160854-d5219fc3-96fc-43b6-b0d4-0d2fe6c72291.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTEiLCJleHAiOjE2OTg5NzI1NTAsIm5iZiI6MTY5ODk3MjI1MCwicGF0aCI6Ii8xMjQyNjIxOC8yODAxNjA4NTQtZDUyMTlmYzMtOTZmYy00M2I2LWIwZDQtMGQyZmU2YzcyMjkxLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFJV05KWUFYNENTVkVINTNBJTJGMjAyMzExMDMlMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjMxMTAzVDAwNDQxMFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTNiMjJkYzY4ZmRhZTA2OGE2Y2Q0YjUxZWQ0NmI0NzJiNTU1YjA1ODIwN2ExOTE0NGMzNjk4MTg4ZjU5MjQ4NWYmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.kRNO-cfCKWio6ezZ7cesoaQ1RQZomaGYGJ2ujVsVpMo)

<br />

## Setup

1. composer install
2. npm install
3. cp .env.example .env
4. set absolute path to sqlite file
5. php artisan migrate
6. php artisan db:seed
7. npm run dev
8. php artisan serve

<br />

## Functionality

-   After filling out the form, a new user entry will be created in a sqlite database.
-   Sending of a confirmation email (here in laravel.log)
-   Show of a success message

<br />

## Structure

-   Email
-   Name
-   TOS
-   Submit
