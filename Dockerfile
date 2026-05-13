FROM php:8.2-apache

# Install PostgreSQL extensions for Neon
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Enable Apache mod_rewrite for routing
RUN a2enmod rewrite



# Apache mod_rewrite enable karein
RUN a2enmod rewrite

# Permissions fix karne ke liye configuration
RUN echo '<Directory /var/www/html/> \n\
    Options Indexes FollowSymLinks \n\
    AllowOverride All \n\
    Require all granted \n\
</Directory>' >> /etc/apache2/apache2.conf

# Restart Apache
RUN service apache2 restart