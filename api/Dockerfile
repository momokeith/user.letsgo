FROM composer/composer as composer

ADD . /tmp
WORKDIR /tmp
RUN composer update

FROM nginx

MAINTAINER Mohamed Keita <naman2kmn@gmail.com>

WORKDIR /var/www/html
COPY --from=composer /tmp/composer.json .

# Nginx site conf
ADD tools/docker/nginx/server.conf /etc/nginx/conf.d/default.conf
