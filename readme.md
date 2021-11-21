# Graffiti in progress

![Peek graffiti](https://user-images.githubusercontent.com/79690181/142780603-b1990e40-2b65-4269-9395-4f52b217840d.gif)

Graffiti is a website presenting graffiti.

## Development environment

![WSL](https://user-images.githubusercontent.com/79690181/142780749-e4d85e74-d5ad-4079-89ac-b8a1d9186ab4.PNG)

* Windows subsystem for Linux, WSL2 virtualization of a Linux operating system.

![REMOTE](https://user-images.githubusercontent.com/79690181/142780825-8e52b0b5-db9e-4ad0-b57b-dbf8df757d86.PNG)

* Text editor VS code with remote extension installation - WSL v0.58.5 for wsl2.

### pre-requisites

* PHP 7.4
* COMPOSER 
* SYMFONY CLI 
* DOCKER 
* DOCKER-COMPOSE
* WINDOWS WSL2 FOR LINUX (GNU/Linux environment) 

You can check the pre-requisites (except docker and docker-compose) with the following command (from the symfony cli).

```bash
symfony check:requirements
```
### Launch the development environment

```bash
docker-compose up -d
symfony serve -d
```




