FROM composer:2 AS composer
FROM php:8.1-fpm-alpine AS base
WORKDIR "/application"

RUN apk update && apk upgrade && apk add --no-cache git

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions \
    && sync \
    && install-php-extensions xdebug ast bcmath pdo_pgsql

COPY --from=composer /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1