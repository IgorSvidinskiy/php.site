FROM php:8.2-apache

# Установка расширений PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Включаем mod_rewrite (если нужен .htaccess)
RUN a2enmod rewrite

# Копируем конфиг Apache
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Копируем файлы сайта
COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html
