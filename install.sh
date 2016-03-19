curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
composer install
chmod -R 777 ./laravel/storage

sudo apt-get update
sudo apt-get install mysql-server
mysql -u homestead -p -h 172.17.0.3 --port 3306
mysql -u homestead -p -h $MYSQL_PORT_3306_TCP_ADDR --port 3306

