FROM 	alpine:3.12

RUN		apk update && apk upgrade ; \
		apk add sudo openrc vim wget supervisor

RUN 	wget https://dl.grafana.com/oss/release/grafana-7.4.0.linux-amd64.tar.gz
RUN 	tar -zxvf grafana-7.4.0.linux-amd64.tar.gz
RUN 	rm -rf grafana-7.4.0.linux-amd64.tar.gz

RUN 	apk --no-cache add ca-certificates wget
RUN 	wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN 	wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk
RUN 	apk add glibc-2.28-r0.apk

COPY 	./supervisor.conf /etc/supervisord.conf
COPY 	./grafana.db /grafana-7.4.0/data/grafana.db
COPY 	./start.sh /tmp/
RUN 	ln -s grafana-7.4.0/bin/grafana-server ./grafana-server
RUN 	chmod +x tmp/start.sh

EXPOSE 	3000

CMD 	tmp/start.sh
