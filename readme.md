# Graffiti in progress
![test](https://user-images.githubusercontent.com/79690181/142732658-07ef24c3-0ad7-4292-a019-e99d99f4bcfd.png)
Graffiti is a website presenting graffiti.

## Development environment

* Windows subsystem for Linux, WSL2 virtualization of a Linux operating system.
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




