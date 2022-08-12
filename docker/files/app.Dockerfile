FROM php:8.1-fpm
ENV TAILWIND_CONFIG=filament
# Set working directory
WORKDIR /var/www/
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    libonig-dev \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    ca-certificates \
    vim \
    tmux \
    unzip \
    git \
    cron \
    supervisor \
    curl \
    nodejs

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/
RUN docker-php-ext-install gd
RUN curl https://github.com/FriendsOfPHP/pickle/releases/latest/download/pickle.phar --output pickle.phar
RUN php pickle.phar install redis
# RUN docker-php-ext-enable redis

RUN php -i | grep "redis"
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy project ke dalam container
COPY ./src /var/www/
RUN rm -rf /var/www/vendor
RUN rm -rf /var/www/node_modules
# COPY ./storage/ /var/www/storage_backup/
# Copy directory project permission ke container
# COPY --chown=www-data:www-data . /var/www/
RUN chown -R www-data:www-data /var/www
RUN chown -R www-data:www-data /var/log/supervisor

# Install dependency
RUN composer install
RUN npm install && npm run build
# Expose port 9000
EXPOSE 9000

# Tambahkan konfigurasi supervisor
COPY docker/supervisor/ /etc/

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

# Ganti user ke www-data
USER www-data