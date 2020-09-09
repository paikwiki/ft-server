#!/bin/bash

ROOT_DIR="/var/www/localhost"

service mysql start

chown -R www-data /var/www/*
chmod -R 755 /var/www/*

echo "UPDATE mysql.user SET plugin = 'mysql_native_password'
		WHERE user='root';" | mysql -u root --skip-password
echo "CREATE DATABASE wordpress;" \
		| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* to 'root'@'localhost';" \
		| mysql -u root --skip-password
echo "FLUSH PRIVILEGES" \
		| mysql -u root --skip-password

tar -xvf phpMyAdmin-4.9.5-english.tar.gz
mv -f phpMyAdmin-4.9.5-english ${ROOT_DIR}/phpmyadmin
mv /var/config.inc.php ${ROOT_DIR}/phpmyadmin/

tar -xvf wordpress-5.5.1.tar.gz
mv -f wordpress ${ROOT_DIR}/wordpress
mv /var/wp-config.php ${ROOT_DIR}/wordpress/

openssl req -newkey rsa:4096 -sha256 -days 365 -nodes -x509 \
			-subj "/C=KR/ST=Seoul/L=Seoul/O=42Seoul/OU=cbaek/CN=localhost" \
			-out localhost.dev.crt \
			-keyout localhost.dev.key
mv localhost.dev.crt /etc/ssl/certs/
mv localhost.dev.key /etc/ssl/private/
chmod 600 etc/ssl/certs/localhost.dev.crt etc/ssl/private/localhost.dev.key

service php7.3-fpm start
service nginx start
bash
