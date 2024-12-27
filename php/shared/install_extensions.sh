# php/ahared/install_extensions.sh

#!/bin/bash

set -e

apt-get update && apt-get install -y \
   libpng-dev\
   libjpeg-dev\
   libfreetype6-dev\
   libonig-dev \
   libxml2-dev \
   zip \
   unzip \
   curl \
   git \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install \
   pdo_mysql \
   mysqli \
   mbstring \
   exif \
   pcntl \
   gd \
   bcmath \
   opcache \
   mysqli \
&& apt-get clean && rm -rf /var/lib/apt/lists/*