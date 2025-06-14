FROM php:8.4-fpm

ARG USER_ID=1000
ARG GROUP_ID=1000
ARG USER_NAME=laravel
ARG GROUP_NAME=laravel

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    libicu-dev \
    acl \
    sudo \
    gnupg \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

RUN git config --global --add safe.directory /var/www/html

RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    opcache \
    intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN groupadd -g ${GROUP_ID} ${GROUP_NAME} || getent group ${GROUP_ID} | cut -d: -f1 | xargs groupmod -n ${GROUP_NAME} \
    && useradd -u ${USER_ID} -g ${GROUP_ID} -m -s /bin/bash ${USER_NAME} || usermod -u ${USER_ID} -g ${GROUP_ID} -l ${USER_NAME} $(getent passwd ${USER_ID} | cut -d: -f1)

RUN echo "${USER_NAME} ALL=(ALL) NOPASSWD: /bin/chown, /bin/chmod, /usr/bin/find" >> /etc/sudoers

RUN mkdir -p /var/www/html/storage/logs \
    && mkdir -p /var/www/html/storage/framework/cache \
    && mkdir -p /var/www/html/storage/framework/sessions \
    && mkdir -p /var/www/html/storage/framework/views \
    && mkdir -p /var/www/html/bootstrap/cache

RUN usermod -g ${GROUP_ID} www-data

RUN chown -R ${USER_ID}:${GROUP_ID} /var/www/html \
    && chmod -R 775 /var/www/html \
    && find /var/www/html -type d -exec chmod g+s {} \;

RUN sed -i "s/user = www-data/user = ${USER_NAME}/g" /usr/local/etc/php-fpm.d/www.conf \
    && sed -i "s/group = www-data/group = ${GROUP_NAME}/g" /usr/local/etc/php-fpm.d/www.conf

COPY --chown=${USER_ID}:${GROUP_ID} composer.json composer.lock* ./
COPY --chown=${USER_ID}:${GROUP_ID} packages ./packages

USER ${USER_NAME}
RUN composer install --no-scripts --no-autoloader --prefer-dist

USER root
COPY --chown=${USER_ID}:${GROUP_ID} . .
COPY entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh

RUN chown -R ${USER_ID}:${GROUP_ID} /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache \
    && find /var/www/html/storage -name "oauth-*.key" -exec chmod 600 {} \; 2>/dev/null || true \
    && touch /var/www/html/storage/logs/laravel.log \
    && chown ${USER_ID}:${GROUP_ID} /var/www/html/storage/logs/laravel.log \
    && chmod 664 /var/www/html/storage/logs/laravel.log

USER ${USER_NAME}
RUN composer dump-autoload --optimize

RUN echo '#!/bin/bash\nphp artisan "$@"\nsudo chown -R '${USER_NAME}':'${GROUP_NAME}' /var/www/html\n' > /var/www/html/artisan-wrapper.sh \
    && chmod +x /var/www/html/artisan-wrapper.sh

EXPOSE 9000

USER ${USER_NAME}
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["php-fpm"]
