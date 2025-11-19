# Imagen base de PHP
FROM php:8.2-fpm

# Instalar dependencias del sistema y extensiones PHP comunes para Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring xml

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de la aplicación
WORKDIR /var/www/html

# Copiar archivos
COPY . .

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader

# Generar los caches de Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Exponer el puerto asignado por Render
EXPOSE 8080

# Comando para arrancar Laravel usando el servidor embebido
CMD php artisan serve --host=0.0.0.0 --port=8080
