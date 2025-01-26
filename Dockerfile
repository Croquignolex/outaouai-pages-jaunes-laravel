FROM php:8.2.27-fpm-alpine

MAINTAINER "Alex Ngombol" <gpetitalex10@gmail.com>

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql
