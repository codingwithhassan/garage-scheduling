## Setup

* `cp .env.example .env`
* `docker-compose up -d`
* `docker-compose exec -it laravel.test bash`
* `php artisan key:generate`
* `php artisan migrate --seed`
