FROM composer:2.0 as build
COPY . /app/
RUN composer update && composer install --prefer-dist --no-dev --optimize-autoloader --no-interaction

FROM php:8.0-apache-buster as production

ENV APP_ENV=production
ENV APP_DEBUG=false

RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    locales \
    zip \
    git \
    libsodium-dev \
    zlib1g-dev \
    libxml2-dev \
    libc-client-dev libkrb5-dev \
    supervisor

RUN apt update && apt-get install -y \
    libpng-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev

# Installing extensions
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install pdo_mysql zip exif pcntl bcmath opcache imap intl

RUN docker-php-ext-configure gd \
    && docker-php-ext-install gd

COPY --from=build /app /var/www/html

RUN php artisan config:cache && \
    php artisan route:cache && \
    chmod 777 -R /var/www/html/storage/ && \
    chown -R www-data:www-data /var/www/
