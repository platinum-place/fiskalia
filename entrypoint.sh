#!/bin/bash

USER_ID=${USER_ID:-1000}
GROUP_ID=${GROUP_ID:-1000}
USER_NAME=${USER_NAME:-laravel}
GROUP_NAME=${GROUP_NAME:-laravel}

git config --global --add safe.directory /var/www/html

mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/storage/framework/cache
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/bootstrap/cache

touch /var/www/html/storage/logs/laravel.log

umask 0002

sudo chown -R ${USER_NAME}:${GROUP_NAME} /var/www/html
sudo chmod -R 775 /var/www/html/storage
sudo chmod -R 775 /var/www/html/bootstrap/cache
sudo chmod 664 /var/www/html/storage/logs/laravel.log

sudo find /var/www/html -type d -exec chmod g+s {} \;

sudo find /var/www/html/storage -name "oauth-*.key" -exec chmod 600 {} \; 2>/dev/null || true
sudo find /var/www/html/storage -name "oauth-*.key" -exec chown ${USER_NAME}:${GROUP_NAME} {} \; 2>/dev/null || true

export USER_ID
export GROUP_ID
export USER_NAME
export GROUP_NAME

exec "$@"
