FROM php:8.1-fpm
WORKDIR /var/www/html

#linux library
RUN apt-get update -y && apt-get install -y\
    libicu-dev\
    libmariadb-dev\
    libpng-dev\
    libonig-dev\
    libxml2-dev\
    libzip-dev\
    zip\
    unzip\
    && docker-php-ext-install -j$(nproc) iconv intl mbstring mysqli opcache pdo_mysql zip

# Install Composer (PHP package manager)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files to the container
COPY . /var/www

# Command to run PHP-FPM
CMD ["php-fpm"]

# Expose ports
EXPOSE 80
