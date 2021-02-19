#!/bin/sh

minikube stop
minikube delete
minikube start
minikube dashboard
minikube addons enable metallb
kubectl apply -f ./srcs/configmap.yaml
eval $(minikube docker-env);

docker build -t nginx_image ./srcs/nginx

kubectl apply -f ./srcs/nginx/nginx.yaml
