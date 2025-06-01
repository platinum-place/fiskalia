FROM php:8.4-cli

ARG USER_ID=1000
ARG GROUP_ID=1000
ARG USER_NAME=laravel
ARG GROUP_NAME=laravel

RUN apt-get update && apt-get install -y \
    supervisor \
    libpq-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql

RUN groupadd -g ${GROUP_ID} ${GROUP_NAME} || getent group ${GROUP_ID} | cut -d: -f1 | xargs groupmod -n ${GROUP_NAME} \
    && useradd -u ${USER_ID} -g ${GROUP_ID} -m -s /bin/bash ${USER_NAME} || usermod -u ${USER_ID} -g ${GROUP_ID} -l ${USER_NAME} $(getent passwd ${USER_ID} | cut -d: -f1)

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN mkdir -p /var/log/supervisor
RUN chown -R ${USER_ID}:${GROUP_ID} /var/log/supervisor

ENTRYPOINT ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
