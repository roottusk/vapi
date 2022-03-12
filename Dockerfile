FROM php:7.4.27-apache 
RUN docker-php-ext-install mysqli pdo_mysql
RUN apt-get update \
    && apt-get install -y libzip-dev \
    && apt-get install -y zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY ./vapi /var/www/html/vapi

RUN rm /var/www/html/vapi/.env

CMD ["php","/var/www/html/vapi/artisan","serve","--host=0.0.0.0"]
