FROM composer/composer as composer
ADD . /tmp
WORKDIR /tmp
RUN ls
RUN composer update

FROM nginx
WORKDIR /tmp
COPY --from=composer /tmp/ .
RUN ls
ADD tools/docker/nginx/server.conf /etc/nginx/conf.d/default.conf
