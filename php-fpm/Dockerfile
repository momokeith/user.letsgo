FROM composer/composer as composer
ADD . /tmp
WORKDIR /tmp
RUN ls
RUN composer update

FROM php:7.1-fpm
RUN mkdir -p /var/www/html
WORKDIR /var/www/html
COPY --from=composer /tmp/ .
RUN ls