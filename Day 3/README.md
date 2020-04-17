# Day 3

## Migration
    -- php artisan make:migration create_table_authors
        -- php artisan migrate
        -- php artisan migrate:rollback
            - Rollback 1 step --step(s?) in docs
        -- php artisan migrate:reset
            - Full wipe
        -- php artisan migrate:refresh
            - Wipe and Migrate

    -- php artisan make:seeder BookSeeder
        -- php artisan db:seed (if it contains refs to other seeders etc)
        -- php artisan db:seed --class=BookSeeder
        -- php artisan migrate --seed
            - First time 
        -- php artisan migrate:refresh --seed
            - Wipe, Migrate and Seed

