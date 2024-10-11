#!/bin/bash

# A script to clear Laravel caches and configurations
echo "Rebuilding Composer Autoload..."
composer dump-autoload

echo "Clearing application cache..."
php artisan cache:clear

echo "Clearing configuration cache..."
php artisan config:clear

echo "Clearing route cache..."
php artisan route:clear

echo "Clearing compiled views..."
php artisan view:clear

echo "Rebuilding configuration cache..."
php artisan config:cache

echo "Rebuilding route cache..."
php artisan route:cache

echo "Optimizing.."
php artisan optimize

echo "All caches cleared and rebuilt successfully."

echo "Running fresh migrations and seeders..."
php artisan migrate:fresh --seed
