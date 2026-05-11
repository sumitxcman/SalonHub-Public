FROM php:8.2-apache

# Install PostgreSQL extensions for Neon
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Enable Apache mod_rewrite for routing
RUN a2enmod rewrite
