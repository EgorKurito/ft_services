FROM 	alpine:3.12

RUN		apk update && apk upgrade ; \
		apk add sudo vsftpd openrc vim openssl supervisor

RUN 	adduser -D user && echo "user:pass" | chpasswd

RUN 	openssl req -x509 -nodes -days 10 -subj "/C=RU/ST=Kazan/L=Kazan/O=21/OU=21School/CN=localhost" \
    	-newkey rsa:1024 -keyout /etc/ssl/private/pure-ftpd.pem -out /etc/ssl/private/pure-ftpd.pem

RUN 	mkdir -p home/user/
RUN 	sudo chmod -R 755 home/user/
RUN 	sudo chmod -R 755 /etc/ssl/private/pure-ftpd.pem
COPY 	./supervisor.conf /etc/supervisord.conf
COPY 	./vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY 	./start.sh	/

EXPOSE 	21 20 20020

CMD 	sh start.sh
