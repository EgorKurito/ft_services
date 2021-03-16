minikube stop
minikube delete
minikube start --driver=docker

eval $(minikube docker-env);
minikube addons enable metallb
minikube addons enable metrics-server
minikube addons list

docker build -t nginx_image srcs/nginx
kubectl apply -f ./srcs/configmap.yaml
kubectl apply -f ./srcs/nginx/nginx.yaml

minikube dashboard
