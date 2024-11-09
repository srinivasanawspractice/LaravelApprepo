#!/bin/bash
echo "Running AfterInstall tasks"
cd /var/www/uploadfileapp
composer install 
php artisan key:generate
php artisan migrate 
sudo chown -R apache:apache /var/www/uploadfileapp
sudo chmod -R 777 /var/www/uploadfileapp/storage /var/www/uploadfileapp/bootstrap/cache




