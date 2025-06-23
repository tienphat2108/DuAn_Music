# Sử dụng image PHP chính thức có kèm Apache
FROM php:8.2-apache

# Cài các extension cần thiết cho Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql zip

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy code vào container
COPY . /var/www/html

# Cấp quyền cho storage và bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Chạy composer install
RUN composer install --no-dev --optimize-autoloader

# Bật mod_rewrite cho Laravel
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80 