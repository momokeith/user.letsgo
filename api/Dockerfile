FROM composer/composer as composer

ADD . /tmp
WORKDIR /tmp
RUN composer update

FROM nginx

MAINTAINER Mohamed Keita <naman2kmn@gmail.com>

COPY --from=composer /tmp/* /var/www/html/

# Nginx site conf
ADD tools/docker/nginx/server.conf /etc/nginx/conf.d/default.conf
