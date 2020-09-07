FROM    debian:buster
LABEL   maintainer="cbaek@student.42seoul.kr"

RUN     apt-get update
RUN     apt-get install -y nginx \
        mariadb-server \
		php \
        php-fpm \
        php-cli \
        php-mysql

EXPOSE  80

COPY    srcs/nginx.conf /etc/nginx/sites-enabled/
COPY    srcs/index.php /var/www/html/
COPY    srcs/init.sh ./

CMD     [ "/bin/bash", "init.sh" ]
