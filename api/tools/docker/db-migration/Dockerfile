FROM composer/composer as composer
ADD . /tmp
WORKDIR /tmp
RUN ls
RUN composer update

FROM thatsamguy/trusty-php71
RUN mkdir -p /var/www/html
WORKDIR /var/www/html
COPY --from=composer /tmp/ .

RUN chmod +x wait_for_it.sh

RUN cat vendor/robmorgan/phinx/src/Phinx/Config/Config.php