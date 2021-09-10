FROM php:8.0.10-fpm

RUN  apt-get update -y
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install  pdo pdo_pgsql
