FROM	debian:buster
RUN		apt-get update
RUN		apt-get upgrade -y
RUN		apt-get install -y nginx
EXPOSE	80
COPY	srcs/init.sh ./
CMD		bash init.sh
