FROM php:7.4-fpm-alpine

RUN apk update && \
  apk add --update --no-cache \
  git build-base libc6-compat icu-dev=~64.2 \
    libzip-dev=~1.5 \
    oniguruma-dev=~6.9 && \
  git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis && \
  docker-php-ext-install intl pdo_mysql mbstring zip bcmath redis
