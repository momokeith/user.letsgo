FROM php:7.1-fpm

MAINTAINER Mohamed Keita <naman2kmn@gmail.com>

RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev libmcrypt-dev git vim libmcrypt-dev libxml2-dev wget \
  && docker-php-ext-install pdo pdo_mysql intl mcrypt zip soap \
  && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD . /var/www/html
