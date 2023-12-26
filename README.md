# lab-autorisation-standard


### Prérequis : lab-authentification-standard

Avant de commencer le travail sur lab-autorisation-basic, assurez-vous d'avoir préalablement accompli les étapes du lab-authentification-standard. lab-authentification-standard crée la base nécessaire pour le lab-autorisation-basic en fournissant une implémentation initiale des opérations CRUD pour les tâches.

### Travail à Faire

Votre mission consiste à appliquer l'autorisation sur les méthodes CRUD associées aux projets, permettant ainsi uniquement au leader du projet d'utiliser ces méthodes. Les membres auront uniquement le droit de voir les projets et les tâches ajoutées par le leader du projet. Vous devrez implémenter ces autorisations en utilisant Spartie dans Laravel.


### Critères de Validation

Assurez-vous que les critères suivants sont respectés :
- Seul le leader du projet a le droit d'effectuer des actions de CRUD sur les projets ,taches et membres (ajout, modification, suppression).
- Les membres ont uniquement le droit de voir les projets et les tâches ajoutées par le leader.
- Spartie est utilisé de manière efficace pour gérer les autorisations.

### Flux de Travail

Suivez ces étapes pour configurer et travailler sur le projet de manière efficace :

1. **Clonage du Projet de Base :**
   ```bash
   git clone https://github.com/husseinbouik/lab-autorisation-standard.git
   ```
   Commencez par cloner le projet de base pour la gestion des tâches.

2. **Configuration de l'Environnement :**
   ```bash
   cd "lab-autorisation-basic"
   cp .env.example .env
   ```
   Créez le fichier .env en utilisant le modèle fourni et ajoutez le nom de la base de données approprié.

3. **Installation des Dépendances avec Composer :**
   ```bash
   composer install
   ```
   Assurez-vous que toutes les dépendances du projet sont correctement installées.

4. **Génération de la Clé de l'Application :**
   ```bash
   php artisan key:generate
   ```
   Assurez-vous de générer une clé unique pour votre application Laravel.

5. **Migration des Tables vers la Base de Données :**
   ```bash
   php artisan migrate
   ```
   Migrez les tables nécessaires vers la base de données.

6. **Peuplement de la Base de Données avec des Données d'Exemple :**
   ```bash
   php artisan db:seed
   ```
   Facilitez les tests en ajoutant des données d'exemple à votre base de données.

7. **Lancement du Serveur Local :**
   ```bash
   php artisan serve
   ```
   Exécutez cette commande pour démarrer votre serveur local et surveiller l'avancement de votre projet.

### Références

- [Documentation Laravel](https://laravel.com/docs/10.x)
- [Découverte de Laravel 10 Grafikart (en français)](https://grafikart.fr/formations/laravel)
