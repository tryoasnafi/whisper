#!/usr/bin/env bash

a2enmod rewrite && service apache2 restart

docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql

service apache2 restart && tail -f /dev/null