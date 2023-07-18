# Immo2 - Projet de Gestion Immobilière (En cours de développement)

Ce projet est inachevée mais une bonne partie du travail est faite.
Certaines fonctionnalités majeurs sont déjà mises en place et constitue une base pour n'importe qui voulant continuer le développement


## Description du projet

Immo2 est un projet de gestion immobilière qui vise à fournir une plateforme pour une agence immobilière privée, permettant aux utilisateurs de rechercher, visualiser et enregistrer des informations sur des appartements disponibles à la location ou à la vente. Le projet est en cours de développement et les fonctionnalités suivantes sont prévues :

- Affichage des appartements disponibles avec leurs détails tels que les images, la description, le prix, etc.
- Recherche avancée pour filtrer les appartements par ville, type, prix, etc.
- Inscription et connexion des utilisateurs pour enregistrer leurs préférences et recherches.
- Enregistrement de nouveaux appartements par les propriétaires ou les agents immobiliers.
- Possibilité de mettre en vedette certains appartements.
- Gestion des annonces pour les propriétaires et les agents immobiliers.
- Consultation des appartements en vedette.
- Vue détaillée d'un appartement avec ses caractéristiques et images en haute qualité.



## Structure du projet

```
Immo2
├── .vscode
│   └── settings.json
├── accueil.php
├── affichage.php
├── inscription.php
├── envedette.php
├── connection.php
├── confirmation.php
├── details-Appart1.php
├── enregistrement.php
├── details.css
├── envedette.css
├── fonction.js
├── head.php
├── images
│   └── ... (images diverses)
├── poster
│   └── ... (images des appartements à poster)
├── Pseudo.php
├── script.js
├── supprimer.php
├── utilisateur.php
├── verification.php
├── Appart1
│   └── ... (images et détails pour Appart1)
├── Appart2
│   └── ... (images et détails pour Appart2)
├── Appart3
│   └── ... (images et détails pour Appart3)
├── Appart4
│   └── ... (images et détails pour Appart4)
├── Appart5
│   └── ... (images et détails pour Appart5)
├── Appart6
│   └── ... (images et détails pour Appart6)
├── css
│   ├── accueil.css
│   ├── details.css
│   ├── envedette.css
│   └── inscription.css
└── javascript
    └── func.js
```

## Comment utiliser le projet

1. Clonez ce dépôt sur votre machine locale en utilisant la commande suivante :

```
git clone https://github.com/AsKing07/App-Personnel-immobilier.git
```

2. Assurez-vous d'avoir un serveur Web local (par exemple, Apache) avec PHP et MySQL installés.

3. Importez la base de données "immo2.sql" fournie dans le projet dans votre gestionnaire de base de données (par exemple, phpMyAdmin).

4. Modifiez les informations de connexion à la base de données dans les fichiers PHP (connection.php, verification.php, etc.) pour correspondre à vos paramètres de configuration.

5. Lancez votre serveur Web local et accédez au projet via votre navigateur Web en utilisant l'URL appropriée (par exemple, `http://localhost/Immo2/accueil.php`).

   NB: Notez que la page principale est `accueil.php`

## Contributions

Le développement de ce projet est toujours en cours et les contributions sont les bienvenues. Si vous souhaitez contribuer, vous pouvez effectuer une demande de fusion (pull request) en proposant vos modifications.

## Auteurs

- SONON Charbel(https://github.com/AsKing07) - Développeur principal

## Licence

Ce projet est sous licence [MIT](LICENSE), ce qui signifie que vous pouvez l'utiliser, le modifier et le distribuer librement. Cependant, veuillez noter que certaines parties du projet peuvent être soumises à d'autres licences.

Nous vous remercions de votre intérêt pour notre projet Immo2 et nous espérons que cela vous sera utile. Si vous avez des questions ou des problèmes, n'hésitez pas à les soulever dans la section des problèmes (issues) du dépôt. Bon développement !
