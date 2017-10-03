FROM php:7.1-fpm

MAINTAINER LeungJZ

COPY php.ini /usr/local/etc/php/conf.d/php.ini

RUN /usr/local/bin/docker-php-ext-install pdo_mysql

EXPOSE 9000

CMD ["php-fpm"]
