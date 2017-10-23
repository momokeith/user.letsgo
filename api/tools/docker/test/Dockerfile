FROM composer/composer as composer

ADD . /tmp
WORKDIR /tmp
RUN composer update

ENTRYPOINT ["bin/phpspec", "r"]