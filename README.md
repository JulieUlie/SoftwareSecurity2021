<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Over SoftwareSecurity2021 Website Project

Opdracht link: [opdracht](https://ehb.instructure.com/courses/19976/assignments/47446)
Website url: [julietous.be](https://julietous.be/)

## Korte uitleg

Dit project werd in Laravel uitgewerkt door Julie Toussaint.
Na je email te verifieren is het mogelijk te navigeren naar de tweets pagina, waarop het mogelijk is tweets te posten. Dit werkt met een Rest API. De Regex van de paswoord filter blokkeerd de 10000 meest voorkomende paswoorden door gebruik te maken van HaveIBeenPwned API. Cookies en GDPR gerelateerde delen zijn ook voorzien op de website. Deze is ook beveiligd tegen courante online aanvallen en kwetsbaarheden.

## Instructies

Installeer PHP 8
Zet de volgende opties op enable in php.ini: pdo_mysql, fileinfo, mbstring, en openssl.

Installeer composer
```
composer install
```

Kopieer de .env.example naar .env en pas aan zodat MySql database verbonden is.

```
php artisan migrate
php artisan key:generate
php artisan passport:install
php artisan passport:client --personal
```

Kopieer de id en client secret naar de .env

```
PASSPORT_PERSONAL_ACCESS_CLIENT_ID=
PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET=
```

Check of de mail settings ingesteld zijn in de .env configuratie. (Registratie vereist mail)

```
php artisan serve
```


## Tweet API Documentation

**Verb	    URI	            Action	        Form Data (Form URL Encoded)**
GET	        /api/tweet	    index	        N/A
POST	    /api/tweet	    Create a Tweet	tweet
GET	        /api/tweet/{id}	show	        N/A
PUT/PATCH	/api/tweet/{id}	update	        tweet
DELETE	    /api/tweet/{id}	destroy	        N/A

**Form Data**

The PUT/PATH only seems to work with urlencoded data, however you can use a multipart form with the create tweet function.
Note you can only delete or update tweets which you own.

## Verwerkingsregister

<verwerkingsregister>
