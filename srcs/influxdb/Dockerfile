FROM 	alpine:3.12

RUN		apk update && apk upgrade ; \
		apk add supervisor influxdb

COPY 	./supervisor.conf /etc/supervisord.conf
COPY 	./start.sh /tmp/
RUN 	chmod +x tmp/start.sh

VOLUME	["var/lib/influxdb"]

EXPOSE 	8086

CMD 	tmp/start.sh
