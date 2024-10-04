#!/bin/bash

# A script to clear Laravel caches and configurations

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

echo "All caches cleared and rebuilt successfully."
