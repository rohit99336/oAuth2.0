
## About project

This project was created for testing purposes only. The name and other things used in this are taken from the internet and the data used in it does not have any relation with any person.I have used my credentials for this project google auth. Thank you !

Please use the following command to install this project -

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/migrations)
 

Clone the repository

    git clone https://github.com/rohit99336/Disyms.git

Switch to the repo folder

    cd project folder

Install all the dependencies using composer

    composer install

Install all the node dependencies using npm

    npm install

mix all the node dependencies using npm

    npm run dev

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**command list**

    git clone https://github.com/rohit99336/Disyms.git
    npm install
    composer install
    npm run dev
    php artisan key:generate
    php artisan migrate
    php artisan serve
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve



