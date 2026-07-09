FROM php:8.2-fpm

WORKDIR /var/www/html

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip \
        libpq-dev \
        ca-certificates \
        gnupg \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y --no-install-recommends nodejs \
    && docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

RUN mkdir -p storage/app/public storage/framework/{sessions,views,cache} storage/logs bootstrap/cache \
    && touch database/database.sqlite \
    && chown -R www-data:www-data storage bootstrap/cache database

RUN cp .env.example .env \
    && php artisan key:generate --force \
    && composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader \
    && npm install \
    && npm run build \
    && php artisan migrate --force

EXPOSE 10000

CMD ["/bin/sh", "-lc", "php artisan route:clear && php artisan config:clear && php artisan view:clear && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
