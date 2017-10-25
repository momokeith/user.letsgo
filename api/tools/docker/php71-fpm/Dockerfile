FROM composer/composer as composer
ADD . /tmp
WORKDIR /tmp
RUN ls
RUN composer update

FROM php:7.1-fpm
RUN mkdir -p /var/www/html
WORKDIR /var/www/html
COPY --from=composer /tmp/ .
RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev libmcrypt-dev git vim libmcrypt-dev libxml2-dev wget \
  && docker-php-ext-install pdo pdo_mysql intl mcrypt zip soap \