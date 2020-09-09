FROM    debian:buster
LABEL   maintainer="cbaek@student.42seoul.kr"

RUN     apt-get update
RUN     apt-get install -y nginx \
        mariadb-server \
		php \
        php-fpm \
        php-cli \
        php-mysql

COPY    srcs/nginx.conf /etc/nginx/sites-enabled/

RUN     mkdir /var/www/wordpress
COPY    srcs/index.php /var/www/wordpress/
COPY    srcs/init.sh ./
COPY    srcs/phpMyAdmin-4.9.5-english.tar.gz ./
COPY    srcs/config.inc.php /var/

EXPOSE  80

CMD     [ "/bin/bash", "init.sh" ]
