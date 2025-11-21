FROM php:8.4-fpm

RUN docker-php-ext-install pdo pdo_mysql mysqli

WORKDIR /var/www/html

# Default smoke script
COPY --chown=www-data:www-data smoke.php /var/www/html/smoke.php

#krsihna
