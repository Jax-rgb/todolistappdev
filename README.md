# todolistappdev

.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todolist
DB_USERNAME=root
DB_PASSWORD=

cd (file location)
php artisan migrate
php artisan make:model Task -mcr
php artisan migrate
php artisan serve
