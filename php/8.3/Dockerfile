FROM php:8.3-fpm

# 設置工作目錄
WORKDIR /var/www/html

# 複製腳本
COPY ./php/shared/install_extensions.sh /usr/local/bin/install_extensions.sh

# 權限
RUN chmod +x /usr/local/bin/install_extensions.sh
RUN /usr/local/bin/install_extensions.sh

# 安裝 Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 開放端口
EXPOSE 9000

# 啟動 PHP-FPM
CMD ["php-fpm"]
