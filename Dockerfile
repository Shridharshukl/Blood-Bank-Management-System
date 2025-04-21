FROM php:8.2-apache-bullseye

RUN docker-php-ext-install mysqli \
    && rm -rf /var/cache/apk/* /usr/share/doc /usr/share/man /usr/share/locale