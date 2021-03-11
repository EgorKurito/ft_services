#!/bin/sh

minikube stop
minikube delete
minikube start

eval $(minikube docker-env);

minikube addons enable metallb

minikube addons enable metrics-server

docker build -t nginx ./srcs/nginx/

kubectl apply -f ./srcs/configmap.yaml

kubectl apply -f ./srcs/nginx/nginx.yaml

minikube dashboard
