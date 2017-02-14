# Pi Data WebApp

## Summary

PHP web application developed with <a href="https://laravel.com/docs">Laravel</a> framework (v5.4) for receiving data from 
a Raspberry Pi via an API, and displaying that data via a web front-end. In production
WIP running on Heroku app engine at http://pidatawebapp.herokuapp.com/.

## How to Install

Pre-requisites:
    - <a href="http://php.net/downloads.php">PHP</a> (I used v7.1.1)
    - <a href="https://getcomposer.org/">Composer</a>
    - A database engine. <a href="https://www.postgresql.org/download/">PostgreSQL</a> v9.6 used in prod. Any others <a href="https://laravel.com/docs/5.4/database">supported by Laravel</a> are ok.

<pre><code>git clone https://github.com/clayshek/Pi-Data-WebApp.git
cd Pi-Data-WebApp
composer install
</code></pre>

Create your own custom <a href="https://github.com/laravel/laravel/blob/master/.env.example">.env</a> file, and update the settings for your environment.
Specifically, the DB_ and MAIL_ settings. 
<a href="https://laravel.com/docs/5.4/configuration">Laravel configuration overview & details.</a>

Generate an APP_KEY for your environment:
<pre><code>php artisan key:generate</code></pre>
Confirm APP_KEY in .env file updated accordingly.

Run the following to create database tables:
<pre><code>php artisan migrate</code></pre>

Configure your local web server to serve the application.
Locally for Dev, use Artisan:
<pre><code>php artisan serve</code></pre>

In prod, I run on <a href="http://www.heroku.com">Heroku</a>, which requires the 'Procfile' file.


## To-Do

 - User Registration
 - Authentication & Authorization
 - Error handling
 - Add Pi delete functionality
 - Add reporting for APC UPS connected to Raspberry Pi 
 - Add SMTP support
 - Upload & document scripts used on Raspberry Pi
 - Add config file for Pi with configurable ID and API endpoint

## License

This is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
