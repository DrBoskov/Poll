



# Document post-mortem

## Etat du projet à la livraison
### Ce qui fonctionne
- L'utilisateur peut s'inscrire, se connecter et se déconnecter.

- L'utilisateur peut ajouter des amis, ceux-ci doivent confirmer ou refuser cette demande.

- L'utilisateur peut accéder à tous les sondages qu'il a créé, à partir de sa page de profil.

- L'utilisateur peut créer un sondage et choisir le type de question. 

- Les utilisateurs peuvent, à partir du lien du sondage, y répondre.

- Si autorisés, les utilisateurs peuvent accéder au récapitulatif des réponses d'un sondage, sinon, seul son créateur en est capable.


### Ce qui ne fonctionne pas
- Lors de la création d'un sondage, on devrait pouvoir ajouter ou supprimer des modules.
Un module est un ensemble comprenant une question, des options, et eventuellement des propositions de réponse. 

- Après l'élaboration du sondage, son créateur devrait pouvoir envoyer un email à certains contacts de sa liste d'amis, en cochant une case par exemple.
- Le créateur d'un sondage devrait aussi pouvoir définir une date de clôture du sondage.
- Le créateur d'un sondage devrait pouvoir le supprimer ou le desactiver/cacher.
- Un des utilisateurs est l'administrateur général du site.
- L'administrateur du site devrait pouvoir supprimer des utilisateurs ou des sondages.
- L'administrateur devrait pouvoir envoyer une newsletter et/ou une note de version par mail, aux utilisateurs enregistrés.

## Déroulement du projet
La communication a principalement été faite via Discord, une application regroupant un tchat écrit et vocal.<br>
L'outil Trello a aussi été utilisé par certains membres du groupe pour la répartition des tâches, une todo-list.<br>
Des réunions à l'université ont aussi permis de discuter plus librement et de se répartir les tâches au cours du projet.

Lors des premiers jours, nous avons dû installer les logiciels nécessaires, notamment pour le serveur Apache, qui nous a posé problème.
Nous avons essayé de mettre en place un environnement de travail sur les ordinateurs des salles de TP, mais les connexions étaient bloquées. Nous avons donc décidé d'utiliser nos machines personnelles.

Une maquette (version zéro) a été définie rapidement, pour prendre en main les outils et techniques utilisés.<br>
Avec nos maigres connaissances, nous avons mis en place le système d'inscription et de connexion.<br>
Cette version a aussi accueilli les premières ébauches de création de sondage et de réponses.<br>
Par la suite, une refonte graphique a été réalisée avec l'aide d'un FrameWork "Materialize", nous fournissant des feuilles de style et des exemples de mise en forme.

Un système d'ajout d'amis (et de confirmation/refus de demande) a été implémenté, avec l'objectif de pouvoir partager plus facilement les sondages avec ses amis.

Nous avons ensuite développé l'idée de proposer des sondages regroupants plusieurs questions, chaque question étant choisie parmi les types suivants :
 - Réponse ouverte
 - Réponses multiples définies par le créateur du sondage
 - Réponses uniques définies par le créateur du sondage
 - Choix d'une date
 - Choix d'un horaire
 
Ainsi que l'option de mettre une date limite pour répondre à un sondage.

Arrivant près de la date impartie pour rendre le projet, nous n'avons pas réussi à implémenter toutes ces options. Nous n'avons pas voulu prendre le risque de développer une fonctionalité à moitié.

Finalement, nous avons opté pour une version rendue proposant des sondages comprenant une question, de type réponse ouverte ou définies (multiples et uniques).


## Axes d'amélioration

_A posteriori_ il aurait été préférable de concevoir le projet sous forme d'application smartphone.

Il est possible de remplacer le php par du JavaScript pour la modernité.

Le profil pourrait permettre à l'utilisateur de retrouver tous les sondages auxquels il a été invité.

On peut imaginer plusieurs options à rajouter aux sondages :
 - La possibilité d'ajouter dynamiquement des champs de réponse lors de la création.
 - La possibilité de choisir un type DatePicker, permettant le choix entre plusieurs jours et horaires, comme initialement prévu.
 - Lors de l'affichage des résultats, proposer plusieurs types de graphiques représentatifs.
 
 <br>

---
<br>

# Manuel de reprise de code

**Langages requis** : PHP, SQL, JavaScript, HTML, CSS.

Dans l'optique de la reprise du projet par un tiers, ce manuel détaille la localisation des fichiers du projet ainsi que la manière dont nous avons procédé pour mettre en place le serveur.

## 1. Localisation et organisation des fichiers.
Les fichiers sont disponibles en ligne à l'adresse <https://github.com/SegolenePoisson/ProjetL3>.

Sur le schéma suivant figurent les relations entre les fichiers constituant le projet, afin de mieux se repérer.

![schema](https://github.com/SegolenePoisson/ProjetL3/blob/master/info/img/liens_pages.jpg "")

## 2. Développement sur serveur local :
Différents logiciels sont utilisables pour créer le serveur local : Xampp, WamppServer, etc.
<br>
Nous avons utilisés Xampp, il permet de lancer un serveur apache pour exécuter le php, ainsi qu'un serveur phpMyAdmin, utilisé pour la base de données.

Pour obtenir les tables de la base de données, sans valeurs, il faut exécuter le fichier db_setup.php, après avoir au préalable créé une nouvelle base de donnée nommée 'poll' dans phpmyadmin. (localhost/phpmyadmin)

Pour obtenir les tables avec un exemple de valeurs, dans phpmyadmin, utiliser la fonction 'import' et le fichier structure.sql.

<br><br>

---

Autres documents d'information :  
- [manuel d'utilisation](https://github.com/SegolenePoisson/ProjetL3/blob/master/info/utilisation.md) ;
- [document d'architecture](https://github.com/SegolenePoisson/ProjetL3/blob/master/info/design.md) ;
- [journal de bord](https://github.com/SegolenePoisson/ProjetL3/blob/master/info/journal.md) ;
- [screencast](https://youtu.be/K_7WUoWmru8) (Youtube).
