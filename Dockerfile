FROM php:8.2.3-apache

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

RUN apt-get update && \
    apt-get install \
    libzip-dev \
    wget \
    git \
    unzip \
    -y --no-install-recommends

RUN docker-php-ext-install pdo_mysql

COPY ./install-composer.sh ./

RUN apt-get purge -y g++ \
    && apt-get autoremove -y \
    && rm -r /var/lib/apt/lists/* \
    && rm -rf /tmp/* \
    && sh ./install-composer.sh \
    && rm ./install-composer.sh


WORKDIR /var/www/html

COPY composer.json .

COPY . .

RUN composer install


EXPOSE 80

RUN chown -R www-data:www-data /var/www/html

CMD ["composer","dump-autoload"]

#
#RUN ./vendor/bin/doctrine-migrations migrate
#
#RUN php seed.php

CMD ["apache2-foreground"]

