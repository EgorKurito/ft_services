#!/bin/sh

openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 -keyout /etc/ssl/nginx_cert.key -out /etc/ssl/nginx_cert.crt < input
rm input
rc-status
rc-service nginx restart
echo -e "1234\n1234\n" > input
adduser hanguy < input
rm input
rc-service sshd restart
/usr/bin/telegraf &
sleep infinity
