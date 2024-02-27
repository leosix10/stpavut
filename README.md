# Saint-Pavut

Projet de développement d'application web MVC avec CodeIgniter 4 en cours de DUT MMI
M3202, réalisé de novembre à décembre 2021.

Réalisation d'un jeu où le participant doit résoudre des énigmes. Ce projet contient une partie back-office.

La Base de données à importer se trouve dans le dossier `conf`.
Veuillez configurer votre URL dans `app/Config/App.php` et vos identifiants pour se connecter à la base de données dans `app/Config/Database.php`.
Les identifiants du back-office sont à modifier dans `app/Controllers/Gestion.php`.
Pour pouvoir afficher les messages d'erreurs que renvoie l'appli, modifier le fichier `.env` et remplacer `production` par `development`.

Vous pouvez suivre la mise en place du projet (bien plus complet) grâce au fichier PDF `Saint Pavut Projet.pdf` présent à la racine qui renvoie vers des vidéos explicatives.

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds the distributable version of the framework,
including the user guide. It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).


## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
