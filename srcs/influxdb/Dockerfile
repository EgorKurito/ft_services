FROM 	alpine:3.12

RUN		apk update && apk upgrade
RUN 	apk add supervisor influxdb \
		telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted --no-cache

COPY 	./supervisor.conf /etc/supervisord.conf
COPY 	./telegraf.conf /etc/telegraf/
COPY 	./start.sh /tmp/
RUN 	chmod +x tmp/start.sh

VOLUME	["var/lib/influxdb"]

EXPOSE 	8086

CMD 	tmp/start.sh
