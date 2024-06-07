FROM php:8.0.0-apache
ARG DEBIAN_FRONTEND=noninteractive
RUN docker-php-ext-install mysqli
# Include alternative DB driver
# RUN docker-php-ext-install pdo
# RUN docker-php-ext-install pdo_mysql
RUN apt-get update \
    && apt-get install -y sendmail libpng-dev \
    && apt-get install -y libzip-dev \
    && apt-get install -y zlib1g-dev \
    && apt-get install -y libonig-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd

RUN a2enmod rewrite

WORKDIR /var/www/html/core/slim
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php composer.phar init --name=slim/devs --type=application
RUN php ./composer.phar install --no-dev --no-progress --no-interaction

RUN php composer.phar require slim/slim:^4.13.0
RUN php composer.phar require slim/psr7:^1.0 --with-all-dependencies
RUN php composer.phar require nyholm/psr7 nyholm/psr7-server
RUN php composer.phar require guzzlehttp/psr7:^2.0
RUN php composer.phar require laminas/laminas-diactoros