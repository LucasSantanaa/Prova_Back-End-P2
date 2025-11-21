FROM php:8.2-apache

# Instala dependências básicas
RUN apt-get update && apt-get install -y git unzip libzip-dev libpng-dev libonig-dev default-mysql-client libxml2-dev

# Extensões PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif bcmath

# Ativa rewrite module
RUN a2enmod rewrite

# Ajusta DocumentRoot para a pasta public do Laravel
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}/!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Composer (pega do container oficial do composer)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
