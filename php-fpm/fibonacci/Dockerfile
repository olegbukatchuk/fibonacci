FROM php:5.6-fpm

MAINTAINER Oleg Bukatchuk <oleg@bukatchuk.com>

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libmhash-dev \
        libbz2-dev \
        libxml2-dev \
        wget nano mc curl \
        python3
RUN cd /tmp/ && \
    curl -O http://downloads.zend.com/guard/7.0.0/zend-loader-php5.6-linux-x86_64.tar.gz && \
    tar zxvf zend-loader-php5.6-linux-x86_64.tar.gz && \
    cd zend-loader-php5.6-linux-x86_64/ && \
    mkdir -p /usr/local/lib/php/extensions/ && \
    cp * /usr/local/lib/php/extensions/ && \
    touch /usr/local/etc/php/conf.d/zend_guard_loader.ini && \
    echo 'zend_extension=/usr/local/lib/php/extensions/ZendGuardLoader.so' > /usr/local/etc/php/conf.d/zend_guard_loader.ini

RUN apt-get update && apt-get install -y libmysqlclient-dev \
    && docker-php-ext-install mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

WORKDIR /var/www/

VOLUME ["${HOME}/fibonacci/www/fibonacci/", "${HOME}/fibonacci/logs/nginx/fibonacci"]

ADD fibonacci.conf /usr/local/etc/php-fpm.d/fibonacci.conf
