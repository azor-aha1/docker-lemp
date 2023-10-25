FROM php:8.2-fpm

ARG user
ARG uid

RUN apt update && apt upgrade -y
RUN apt install -y openssl curl git p7zip-full nano

RUN docker-php-ext-configure pcntl --enable-pcntl \
  && docker-php-ext-install \
    pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user

USER $user
