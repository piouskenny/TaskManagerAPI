# Use an official PHP runtime as the base image
FROM php:8.1-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

# Install PHP extensions required by Laravel
RUN docker-php-ext-install pdo_mysql

# Copy the existing Laravel application code into the container
COPY . .

# Install Composer and run Composer install
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction --no-scripts

# Set up the Apache configuration
COPY .docker/apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Set the permissions for Laravel storage and bootstrap cache directories
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Expose the port to access the Laravel application
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
