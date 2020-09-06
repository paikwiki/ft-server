FROM    debian:buster
LABEL   maintainer="cbaek@student.42seoul.kr"
RUN     apt-get update
RUN     apt-get install -y nginx
EXPOSE  80
CMD    [ "nginx", "-g", "daemon off;" ]
# COPY  srcs/init.sh ./
# CMD    bash init.sh
