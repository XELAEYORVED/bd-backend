# 🐘 Bases de données et développement back-end

> Dépôt personnel de l'UE **Bases de données et développement back-end**
> Bachelier en Informatique, orientation réseaux et télécommunications, HEH
> Année académique 2026-2027

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL%20%2F%20MariaDB-4479A1?logo=mysql&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032?logo=git&logoColor=white)
![Statut](https://img.shields.io/badge/statut-en%20cours-orange)

---

## 🎯 Objectif

Ce dépôt rassemble tout mon travail pour l'UE : les exercices des travaux pratiques
de PHP, mes notes du cours théorique sur les bases de données, et surtout mon
**cahier d'erreurs**, où je note chaque bug rencontré pour ne pas le refaire.

## 📁 Structure du dépôt

```


bd-backend/
├── README.md
├── php/
│   ├── erreurs.md            # cahier d'erreurs (message, cause, solution)
│   ├── exercice1/            # Hello World
│   ├── exercice2/            # Inclusions de fichiers
│   ├── exercice3/            # Opérations sur les variables
│   ├── exercice4-1/, 4-2/    # Boucles (Lotto)
│   ├── exercice5/            # Générateur de noms de nains
│   ├── exercice6/            # Fonctions (Web Atomic Pickles)
│   ├── exercice7/            # Paramètres GET
│   ├── exercice8/            # Formulaire de connexion (sessions)
│   ├── exercice9/            # Formulaire sécurisé
│   ├── exercice10/           # Objets et dates (livraisons)
│   ├── exercices-papier/     # réponses aux exercices papier
│   └── ...
└── database/
    ├── notes-cours.md        # notes du cours théorique
    ├── sql-exercices/        # requêtes SQL des exercices
    └── walkingPets.sql       # base de données de l'exercice final
```

## ✅ Progression des travaux pratiques PHP

- [x] **Ex. 1** : Hello World (installation et premier script)
- [x] **Ex. 2** : Inclusions de fichiers et redirections
- [x] **Ex. 3** : Opérations sur les variables
- [x] **Ex. 4.1 et 4.2** : Boucles
- [x] **Ex. 5** : Générateur de noms de nains
- [x] **Ex. 6** : Fonctions
- [x] **Ex. 7** : Paramètres GET
- [x] **Ex. 8** : Formulaire de connexion
- [x] **Ex. 9** : Formulaire sécurisé
- [x] **Ex. 10** : Objets et dates
- [ ] **Exercice final** : Walking Pets (PHP + MySQL)

## 🧠 Notions abordées

| Thème | Contenu |
|---|---|
| **Bases du PHP** | Balises, `echo`, variables, chaînes, tableaux |
| **Structuration** | `include` / `require`, redirections avec `header()` |
| **Logique** | Conditions, boucles, fonctions, regex |
| **Web** | GET et POST, sessions, cookies, formulaires |
| **Sécurité** | Injections, hachage, CSRF, authentification |
| **Objet** | Classes, héritage, sérialisation, namespaces |
| **Base de données** | SQL, PDO, requêtes préparées, jointures |
| **Bonnes pratiques** | PSR-1 / PSR-12, architecture MVC |

## 🛠️ Environnement de développement

- PHP 8.5 (binaire static-php-cli dans `~/.local/bin/php`), avec le serveur intégré `php -S`
- MySQL / MariaDB : à installer pour l'exercice final (Walking Pets)
- Éditeur : **Visual Studio Code**
- Gestion de base de données : **phpMyAdmin**
- Versionnement : **Git** et **GitHub**

## 🚀 Lancer un exercice

1. Depuis la racine du dépôt, lancer : `php -S localhost:8000 -t php`
2. Ouvrir `http://localhost:8000/` : la page liste tous les exercices.
3. `Ctrl+C` dans le terminal pour arrêter le serveur.

> ⚠️ Ne jamais ouvrir un fichier PHP en double-cliquant dessus : il doit
> toujours passer par le serveur local pour être interprété.

## 📓 Cahier d'erreurs

Le fichier [`php/erreurs.md`](php/erreurs.md) contient les erreurs rencontrées, au format :

```
## Titre de l'erreur
- Erreur : le message exact affiché
- Cause : ce qui l'a provoquée
- Solution : comment je l'ai corrigée
```

## 🔒 Remarque

Ce dépôt est privé et sert à l'apprentissage. Il ne contient aucun mot de passe ni
identifiant de connexion réel à une base de données.

---

*Dernière mise à jour : octobre 2026*
