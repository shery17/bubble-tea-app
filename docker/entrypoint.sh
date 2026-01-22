#!/usr/bin/env sh
set -e

# Ensure writable dirs
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true

# Clear any cached config (safe)
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

# Run migrations (required on free tier)
php artisan migrate --force

# Start Apache
exec apache2-foreground
