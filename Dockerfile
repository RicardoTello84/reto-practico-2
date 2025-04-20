FROM php:apache

# Instalar extensión mysqli
RUN docker-php-ext-install mysqli

# Opcional: activar más extensiones si lo necesitas
# RUN docker-php-ext-install pdo pdo_mysql

# Copiar el código de la app
COPY ./app/ /var/www/html/
