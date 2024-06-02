FROM php:8.0-apache


RUN    apt-get update


RUN    apt-get -y install net-tools


WORKDIR /var/www/html


COPY index.php index.php


EXPOSE 80
