#Tasks
This is a project to learn a bit about the Laravel framework. It provides the functionality to create and list tasks.

##Installation
• Install Laravel Valet on your machine (https://laravel.com/docs/5.7/valet) - Valet is a Laravel development environment for Mac minimalist. Laravel Valet configures your Mac to always run Nginx in the background when your machine starts. Then, using DnsMasq, Valet proxies all requests on the *.test domain to point to sites installed on your local machine.
• Run the following command in your terminal: `composer install`
• Set up your .env file by filling in the values needed for mysql
• Run the following command in your terminal: `php artisan migrate`
• Access the web app by entering: http://tasks.test in your browser (you can change the test domain to any other domain as explained in the valet documentation)
