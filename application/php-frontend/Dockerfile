FROM php:7.3-apache
MAINTAINER Shawn Stratton <shawn@webop.ninja>
WORKDIR /var/www/html
COPY ./ /var/www/html
RUN chown -R www-data /var/www/html \
&&  rm Dockerfile composer.json composer.lock
