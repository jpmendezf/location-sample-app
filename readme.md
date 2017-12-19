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
Generate a key for the app
```
php artisan key:generate
```



step 3:
Run the application from localhost.

step 4:
User can use the search box for location finding or they can use locate me button. Once the user selects the location, the application will list all menus and display latitude and longitude information with formated address.

step 5:
User can do category filter. Based on filter menu item will be listed. they can apply more than one category.

step 6:
User can do food type[veg or non-veg] filter. Based on filter menu item will be listed. they can apply more than one food type.