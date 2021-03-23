# ft_services
>  This is a System Administration and Networking project with Kubernetes.

The project consists of setting up an infrastructure of different services(Grafana, WordPress, PhpMyadmin and so on). 
[![Project diagram](https://i.postimg.cc/t41yjXpT/Screenshot-2021-03-23-at-08-25-34.png)](https://postimg.cc/k2dLNPV3)

## Usage

You must have ```Docker```, ```VirtualBox```, ```minikube``` and ```kubectl``` installed.

* Setup :
```shell
# Start the setup
./setup.sh
```
* FTPS :

Use ```Filezilla``` and connect with ```user:pass``` on port 21

## Features
* ```FTPS``` on port 21
* ```MySQL``` on port 3306
* ```Wordpress``` on port 5050
* ```Phpmyadmin``` on port 5050
* ```Grafana``` on port 3000
* ```InfluxDB``` on port 8086
* ```Nginx``` on port 80, 443 (SSL) and 4000 (SSH)
