FROM composer/composer as composer
ADD . /tmp
WORKDIR /tmp
RUN ls
RUN composer update

FROM nginx
RUN ls /var/www/
WORKDIR /var/www/html
COPY --from=composer /tmp/composer.json .
RUN ls
ADD tools/docker/nginx/server.conf /etc/nginx/conf.d/default.conf
