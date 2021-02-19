#!/bin/sh

minikube stop
minikube delete
minikube start
minikube dashboard
minikube addons enable metallb
kubectl apply -f ./srcs/configmap.yaml
eval $(minikube docker-env);

docker build -t mysql_image ./srcs/mysql

kubectl apply -f ./srcs/mysql/mysql.yaml
