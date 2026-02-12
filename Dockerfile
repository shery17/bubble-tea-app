FROM php:8.2-apache

# System + PHP deps (Postgres)
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev curl libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql zip \
  && a2enmod rewrite \
  && rm -rf /var/lib/apt/lists/*


# Apache → Laravel public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
 && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Node for Vite build
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
 && apt-get install -y nodejs

WORKDIR /var/www/html
COPY . .

# Install backend deps
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets (Vite/Tailwind)
RUN npm ci && npm run build

# Permissions for logs/cache
RUN chown -R www-data:www-data storage bootstrap/cache

COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
CMD ["/entrypoint.sh"]

