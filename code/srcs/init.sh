#!/bin/bash

service mysql start

echo "UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE user='root';" \
		| mysql -u root --skip-password
echo "CREATE DATABASE wordpress;" \
		| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* to 'root'@'localhost';" \
		| mysql -u root --skip-password
echo "FLUSH PRIVILEGES" \
		| mysql -u root --skip-password

nginx -g 'daemon off;'
