Location based search sample app

## Technology Stack
* PHP
* Laravel
* Jquery
* Bootstrap
* Google map Javascript API

## Deployment

Step 1:
Clone this repo
```
https://github.com/kalyanakannan/location-sample-app.git
```

step 2:
Run composer install in cloned project directory
```
composer install
```

step 3:
Config env file in linux
```
cd application path

cp .env.example .env
```

Config env file in windows
```
cd application path

copy .env.example .env
```

step 3:
Generate key for app
```
php artisan key:generate
```



step 3:
Run the application from localhost.

step 4:
User can use search box for location finding or they can use locate me button. Once the user select the location, application will list all menus and display latitude and longitude information with formated address.


