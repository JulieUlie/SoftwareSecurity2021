<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Over SoftwareSecurity2021 Website Project

Opdracht link: [opdracht](https://ehb.instructure.com/courses/19976/assignments/47446)
Website url: [julietous.be](https://julietous.be/)

## Instructies

Installeer PHP 8
Zet de volgende opties op enable in php.ini: pdo_mysql, fileinfo, mbstring, en openssl.

Installeer composer
```
composer install
```

### Kopieer de .env.example naar .env en pas aan zodat MySql database verbonden is.

```
php artisan key:generate
php artisan passport:install
php artisan passport:client --personal
```

### Kopieer de id en client secret naar de .env

PASSPORT_PERSONAL_ACCESS_CLIENT_ID=
PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET=

```
php artisan serve
```

## Verwerkingsregister

<verwerkingsregister>
