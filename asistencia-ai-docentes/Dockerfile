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
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip mbstring xml gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de la aplicación
WORKDIR /var/www/html

# Copiar archivos
COPY . .

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader

# (Opcional) Generar los caches de Laravel
# Si te da errores al hacer build, déjalo comentado
# RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Exponer el puerto (no es obligatorio para Railway, pero ayuda)
EXPOSE 8000

RUN php artisan migrate --force || true


# Comando para arrancar Laravel usando el servidor embebido
# Usa el puerto que Railway pone en $PORT (y si no existe, usa 8000)
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"]
