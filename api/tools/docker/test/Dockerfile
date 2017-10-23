FROM composer/composer as composer

ADD . /tmp
WORKDIR /tmp
RUN composer update

CMD ["bin/phpspec", "r"]