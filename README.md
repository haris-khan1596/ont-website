# ONT-website
## How to Install
- First Download the Project:
```git clone https://github.com/haris-khan1596/ont-website.git```
- Second go to the Project directory
``` cd ont-website/ontlab```
- Import ```laravel.sql``` into phpMyadmin
- Then, Run below commands
``` 
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan serve
```
