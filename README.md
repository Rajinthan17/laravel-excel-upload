# Laravel Excel Upload

This repository contains a Laravel project that enables you to upload Excel files. Follow the instructions below to run the project and implement it into your own project.

# Running the Project

    1.Run composer install to install the project dependencies.

    2. Copy the .env.example file and save it as .env. Update the database credentials in the .env file.

    3. Generate a new application key by running php artisan key:generate.

    4. Optimize the application by running php artisan optimize.

    5. Run the database migrations using php artisan migrate:fresh.

    6. Start the server with php artisan serve.


# Implementing into Your Project

    1. Run composer require maatwebsite/excel to add the Laravel Excel package to your project.

    2. Check your composer.json file and ensure that the maatwebsite/excel version is as follows:
        "require": {
            "maatwebsite/excel": "^1.1"
        }

        If it's not, change it to:
        "require": {
            "maatwebsite/excel": "^3.1"
        }

    3. Update the dependencies by running composer update.

    4. Optimize the application by running php artisan optimize.

    5. Update the providers in config/app.php file:
        'providers' => ServiceProvider::defaultProviders()->merge([
            Maatwebsite\Excel\ExcelServiceProvider::class,
        ])->toArray()

    6. Optimize the application again by running php artisan optimize.

    
Now you can use the Laravel Excel Upload functionality in your project.
