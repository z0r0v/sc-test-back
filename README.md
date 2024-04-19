## Install docker
[docker](https://docs.docker.com/engine/install/)

## Install laradock and configure container
[laradock](https://laradock.io/getting-started/)
### Docker Up

#### cd ../laradock
```
docker-compose up -d --build nginx php-fpm postgres workspace
```
### Move to docker container
```
docker exec -it laradock-workspace-1 bash
```
### Start migrate data base
```
php artisan migrate
```
### set mock data
```
php artisan db:seed
```
### instal dependecis
```
cd /var/www/sc-test-back#
```
```
composer install
```
