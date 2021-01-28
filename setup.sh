#!/bin/sh

minikube delete
minikube start
minikube dashboard
# minikube addons enable metallb
# kubectl apply -f ./srcs/configmap.yaml
