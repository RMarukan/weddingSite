# initial setting
```bash
$ git clone https://github.com/RMarukan/weddingSite.git
$ cd weddingSite
$ git submodule init
$ git submodule update
$ cp .env.example .env
$ cp .env.laradock laradock/.env
$ cd laradock
$ docker-compose up -d --build nginx mariadb
$ docker-compose exec workspace composer install
$ docker-compose exec workspace php artisan key:generate
```
http://localhost:8080/
