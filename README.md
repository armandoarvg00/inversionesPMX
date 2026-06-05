php artisan ui argon
composer dump-autoload
php artisan migrate:fresh --seed

npm install
npm run dev

php artisan storage:link


//////////En caso de cambiar dde equipo validar que este activo en 

C:\laragon\bin\php\php-8.4.21-Win32-vs17-x64\php.ini

extension=zip
extension=fileinfo
extension=openssl
extension=mbstring
extension=pdo_mysql
extension=mysqli
extension=intl


#en caso de error 
rmdir /s /q vendor
#
reinciar apache
composer install

crear bd y 
php artisan migrate
php artisan storage:link
php artisan optimize:clear
php artisan migrate:fresh --seed
php artisan db:seed
