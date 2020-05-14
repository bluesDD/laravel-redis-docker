FROM php:7.4-fpm-alpine

RUN apk update && \
  apk --no-cache upgrade \
  docker-php-ext-install pdo_mysql \
  apk add zlib1g-dev \
  libmcrypt-dev \
  libpq-dev \
  libjpeg-dev \
  libpng-dev \
  xvfb libfontconfig wkhtmltopdf \
  echo TT
