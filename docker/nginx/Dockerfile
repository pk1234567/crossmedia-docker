FROM nginx:stable-alpine

ADD ./config/nginx.conf /etc/nginx/nginx.conf
ADD ./config/default.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/www/html \
    && addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel \
    && chown laravel:laravel /var/www/html