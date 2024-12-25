
FROM php:8.1-fpm

# 設置工作目錄
WORKDIR /var/www

# 安裝必要的 PHP 擴展
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    gd \
    bcmath \
    opcache \
    mysqli \  
 && apt-get clean && rm -rf /var/lib/apt/lists/*

# 安裝 Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 開放端口
EXPOSE 9000

# 啟動 PHP-FPM
CMD ["php-fpm"]
