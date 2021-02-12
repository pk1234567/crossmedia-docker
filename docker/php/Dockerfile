FROM php:7.4-fpm-alpine

ADD ./config/www.conf /usr/local/etc/php-fpm.d/www.conf
ADD ./config/php.ini /usr/local/etc/php/php.ini

RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel \
    && mkdir -p /var/www/html \
    && chown laravel:laravel /var/www/html \
    && docker-php-ext-install pdo pdo_mysql

RUN apk add --update --no-cache autoconf g++ imagemagick imagemagick-dev libtool make pcre-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apk del autoconf g++ libtool make pcre-dev

WORKDIR /var/www/html
