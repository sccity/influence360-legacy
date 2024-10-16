#!/bin/bash

# Clear application cache
php artisan cache:clear

# Clear route cache
php artisan route:clear

# Clear config cache
php artisan config:clear

# Clear compiled views
php artisan view:clear

# Clear application compiled files
php artisan clear-compiled

# Refresh application autoloaded classes
composer dump-autoload

# Drop all tables, re-run migrations, and seed the database
php artisan migrate:fresh --seed

echo "Caches cleared, migrations refreshed, and database seeded!"