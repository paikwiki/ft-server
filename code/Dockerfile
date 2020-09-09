FROM    debian:buster
LABEL   maintainer="cbaek@student.42seoul.kr"

RUN     apt-get update
RUN     apt-get install -y nginx \
        mariadb-server \
		php \
        php-fpm \
        php-cli \
        php-mysql \
        openssl \
        vim

COPY    srcs/localhost.conf /etc/nginx/sites-enabled/

RUN     mkdir /var/www/localhost
RUN     mkdir /etc/nginx/ssl
COPY    srcs/init.sh ./
COPY    srcs/phpMyAdmin-4.9.5-english.tar.gz ./
COPY    srcs/config.inc.php /var/
COPY    srcs/wp-config.php /var/
COPY    srcs/wordpress-5.5.1.tar.gz ./

EXPOSE  80

CMD     [ "/bin/bash", "init.sh" ]
