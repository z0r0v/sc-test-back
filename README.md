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
### Set mock data
```
php artisan db:seed
```
### Instal dependecis
```
cd /var/www/sc-test-back#
```
```
composer install
```
### Postman config
LTS.postman_collection.json
