## Inslall laradock and configure
https://laradock.io/getting-started/

### Docker Up
#### cd ../laradock
```
docker-compose up -d --build nginx php-fpm postgres workspace
```
```
docker exec -it laradock-workspace-1 bash
```
### instal dependecis
```
cd /var/www/sc-test-back#
composer install
```
####Console Comand create
```
php artisan make:command ComandName
```
#### Second Up
#### cd ../laradock
```
docker-compose up -d nginx php-fpm postgres workspace
```

### Build run
```
npm run dev 
```

