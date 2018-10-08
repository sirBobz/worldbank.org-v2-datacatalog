# Worldbank datacatalog Consumer API Service
This is a Laravel 5.7 powered web application that GETs the JSON content from Worldbank datacatalog, validates and inserts the data into a database table.

The data is thereafter displayed on a datatable.

### Minimum requirements 
* php >= 7.1.3

### Installation ###
* type `https://github.com/sirBobz/worldbank.org-v2-datacatalog.git datacatalog` to clone the repository 
* type `cd datacatalog`
* type `composer install`
* type `composer update`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to generate secure key in *.env* file
* if you use MySQL in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD

* type `php artisan migrate` to create tables


### Included packages ###

* [reliese/laravel](https://github.com/reliese/laravel) is a collection of Laravel Components which aim is to help the development process of Laravel applications by providing some convenient code-generation capabilities.

* [predis/predis](https://github.com/nrk/predis) Flexible and feature-complete Redis client for PHP >= 5.3 and HHVM >= 2.3.0.


* [fideloper/proxy](https://github.com/fideloper/TrustedProxy) Laravel Proxy Package for handling sessions when behind load balancers or other intermediaries.

### Features ###


* Authentication (registration, login, logout)

* On register/login, view the transactions on the dashboard. The transactions are as a result of GET request from the API call.

