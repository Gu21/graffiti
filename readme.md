#  Graffiti en cours de réalisation

Graffiti est un site internet présentant des graffiti.

## Environnement de développement
* sous-système Windows pour Linux WSL2 virtualisation d’un système d’exploitation Linux.

### pré-requis

* PHP 7.4
* COMPOSER 
* SYMFONY CLI 
* DOCKER 
* DOCKER-COMPOSE
* SOUS SYSTEME WINDOWS WSL2 POUR LINUX (environnement GNU/Linux) 

Vous pouvez vérifier les pré-requis (sauf docker et docker-compose) avec la commande suivante (de la cli symfony)

```bash
symfony check:requirements
```
### Lancer l'environnement de développement

```bash
docker-compose up -d
symfony serve -d
```



