# Laravel Dev Test

## Development Area

### Building

The following installation will require you to have GIT, PHP and Composer installed on 
your local machine. Then pick either [Laravel Sail](https://laravel.com/docs/8.x/sail) 
or [Laravel Homestead](https://laravel.com/docs/8.x/homestead), which might require you 
to install additional sofware to get setup.

#### Build (ALL)

Clone repo and initail configuration:
```
git clone git@bitbucket.org:wireboxteam/laravel-dev-test-2021.git
cd laravel-dev-test
composer install
cp .env.example .env
php artisan key:generate
```
#### Build with Sail

Edit the .env and set (or uncomment) the database details to the following:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_dev_test
DB_USERNAME=sail
DB_PASSWORD=password
```

Boot project:
```
vendor/bin/sail up
vendor/bin/sail artisan migrate
```

View project:

* Project [http://localhost](http://localhost)
* Mail Inbox [http://localhost:8025/](http://localhost:8025/)

#### Build with Homstead

Edit the .env and set (or uncomment) the database details to the following:
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Boot project:
```
php vendor/bin/homestead make
vagrant up
vagrant ssh
cd code/
php artisan migrate
```

View project:

* Project [http://192.168.10.10/](http://192.168.10.10/)
* Mail Inbox [http://localhost:8025/](http://localhost:8025/)
