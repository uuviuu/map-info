FROM php:8.1.7-fpm

RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      libyaml-dev \
      zip unzip \
      git \
      fish \
      redis \
      && pecl install yaml \
      && pecl install redis \
      && docker-php-ext-enable redis

RUN set -eux; \
    docker-php-ext-install  \
      pdo_mysql \
      bcmath \
      gd \
      zip

RUN chsh -s /usr/bin/fish

COPY --from=spiralscout/roadrunner:2.9.1 /usr/bin/rr /usr/bin/rr

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

RUN groupadd --gid 1000 user \
    && useradd --uid 1000 --gid 1000 --shell /usr/bin/fish user \
    && mkdir /home/user \
    && chmod 777 /home/user

USER user

WORKDIR /var/www

CMD ["php-fpm"]