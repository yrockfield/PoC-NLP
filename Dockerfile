FROM php:7.0-apache

COPY ./docker-image-contents/etc_apache2_conf-enabled_docker-php.conf /etc/apache2/conf-enabled/docker-php.conf
COPY ./wwwfiles/ /var/www/html/
