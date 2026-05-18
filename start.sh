#!/bin/sh
composer install --no-dev --optimize-autoloader --no-scripts
php bin/console doctrine:migrations:migrate --no-interaction --env=prod
php -S 0.0.0.0:8000 -t public/
