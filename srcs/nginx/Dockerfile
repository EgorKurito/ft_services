FROM	alpine:3.12

RUN		apk update && apk upgrade ; \
		apk add nginx openssl openssh supervisor \
		telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted --no-cache

COPY 	./telegraf.conf /etc/telegraf/
RUN 	rm /etc/nginx/conf.d/default.conf
COPY	./default.conf /etc/nginx/conf.d/default.conf
COPY 	./supervisor.conf /etc/supervisord.conf
COPY 	./index.html /var/www/index.html

RUN 	ssh-keygen -A && adduser -D user && echo "user:pass" | chpasswd

RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout \
		/etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt \
		-subj "/C=RU/ST=Kazan/L=Kazan/O=21/OU=21School/CN=localhost"

EXPOSE	80 443 22

COPY 	./start.sh /tmp/
RUN 	chmod +x tmp/start.sh
RUN 	mkdir -p /run/nginx
CMD 	tmp/start.sh
