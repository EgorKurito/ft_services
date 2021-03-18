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

docker build -t mysql_image srcs/mysql
kubectl apply -f ./srcs/mysql/mysql.yaml

docker build -t wordpress_image srcs/wordpress
kubectl apply -f ./srcs/wordpress/wordpress.yaml

minikube dashboard
