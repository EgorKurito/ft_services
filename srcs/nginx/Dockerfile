FROM	alpine:3.7
EXPOSE	22 80 443

RUN		apk update && apk upgrade
RUN		apk add vim nginx curl openrc openssl openssh-server

COPY	./default.conf /etc/nginx/conf.d/default.conf
COPY 	./index.html /var/www/index.html

RUN 	mkdir -p /run/nginx
RUN 	mkdir -p /run/openrc/
RUN 	touch /run/openrc/softlevel

COPY 	start.sh /
CMD 	["sh", "start.sh"]
