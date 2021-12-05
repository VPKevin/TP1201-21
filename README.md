# TP0112

## Guide d'installation

### Installer la base du projet

  Cloner le dépôt depuis https://github.com/VPKevin/TP0112.git vers le dossier de l'application
```bash
git clone https://github.com/VPKevin/TP0112.git [my-app-name]
```
Remplacer `[my-app-name]` avec le nom de dossier souhaité pour l'application.

### Installer le Docker

Executer la commande qui suit à la racine du projet:
```bash
docker-compose build
```

### Installer le depandance Composer

```bash
composer install
```



## Tester l'application

### Démarrer le Docker

Démarrer ensuite le docker avec cette commande :
```bash
docker-compose up -d
```

### Acceder a la page d'acceuil du l'application

http://localhost:5555

Un utilisateur fictif a déjà été créé pour vous :
 - mail : `kev@domain.fr`
 - password : `azerty`
