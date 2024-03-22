FROM php:8.1-fpm

ARG user=tomfrota
ARG uid=1000

RUN apt-get update && apt-get install -y git

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer 

WORKDIR /var/www

