FROM devilbox/php-fpm-7.4:latest
MAINTAINER Anderson Lucas
WORKDIR /var/www
COPY / /var/www
ENTRYPOINT php -S 0.0.0.0:8000 -t public
EXPOSE 8000