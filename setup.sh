#!/bin/sh

minikube stop
minikube delete
minikube start
minikube dashboard
minikube addons enable metallb
minikube addons enable metrics-server
kubectl apply -f ./srcs/configmap.yaml
eval $(minikube docker-env);

docker build -t mysql_image ./srcs/mysql
docker build -t wordpress_image ./srcs/wordpress

kubectl apply -f ./srcs/mysql/mysql.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml
