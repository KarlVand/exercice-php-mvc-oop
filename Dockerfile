FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN a2enmod rewrite



# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer



# Set working directory
WORKDIR /var/www/html

COPY ./apache-config.conf /etc/apache2/sites-available/000-default.conf

COPY php.ini /usr/local/etc/php/php.ini

RUN mkdir -p /usr/local/etc/php/conf.d

# Change ownership of our applications
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80
