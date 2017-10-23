FROM composer/composer as composer
ADD . /tmp
WORKDIR /tmp
RUN ls
RUN composer update

FROM nginx
MAINTAINER Mohamed Keita <naman2kmn@gmail.com>
WORKDIR /var/www/html
RUN ls
COPY --from=composer /tmp/composer.json .
ADD tools/docker/nginx/server.conf /etc/nginx/conf.d/default.conf
