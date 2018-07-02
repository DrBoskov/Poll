# Manuel d'utilisation du générateur de sondage WOUI
Ce manuel détaille l'utilisation des différentes fonctionnalités du site, côté utilisateur et côté administrateur (*cette fonctionnalité n'est pas encore disponible, pour plus d'informations, se reporter au [post-mortem](https://github.com/SegolenePoisson/ProjetL3/blob/framework/info/post_mortem.md)*.).  

WOUI permet aux utilisateurs possédant un compte de créer des sondages à petite échelle. Une page spécifique est générée à la création du sondage, l'utilisateur partage le lien aux personnes qui y participent, lesquelles répondent directement sur cette page. Le sondage reste ouvert pendant une durée prédéfinie.

## 1. Manuel utilisateur

L'utilisateur doit créer un compte pour utiliser les fonctionnalités du site (détaillées dans les parties suivantes) : créer un sondage, le partager, y répondre, consulter les résultats et gérer la liste d'amis.

Pour un résumé du fonctionnement du site, une vidéo screencast est disponible sur Youtube en cliquant [ici](https://youtu.be/K_7WUoWmru8).

### 1.1. Créer un compte et se connecter.

Sur la page d'accueil, dans la barre de navigation, en haut à droite, cliquer sur "**S'inscrire**". 

![Capture d'écran de la page S'inscrire](https://github.com/SegolenePoisson/ProjetL3/raw/master/info/img/signUp.png "Capture d'écran de la page d'inscription.")

Remplir le formulaire d'inscription : entrer un nom, une adresse mail valide, choisir un pseudonyme, un mot de passe (à entrer une deuxième fois pour confirmation dans le champ prévu à cet effet) et un captcha pour prévenir des robots. Cliquer sur le bouton "**S'inscrire**". Le compte est alors créé. Une page d'information s'affiche indiquant "*Votre compte a été créé avec succès.*" avant d'être redirigée vers la page de connexion.

![Capture d'écran de la page Se connecter](https://github.com/SegolenePoisson/ProjetL3/raw/master/info/img/logIn.jpg "Capture d'écran de la page de connexion.")

Pour se connecter, saisir le pseudonyme choisi lors de l'inscription ainsi que le mot de passe associé, puis cliquer sur "**Se connecter**". Le compte est maintenant connecté. Pour se déconnecter, cliquer sur le bouton "**Déconnexion**". A gauche de ce bouton, on peut voir apparaître le pseudonyme associé au compte.

Un fois connecté à son compte, l'utilisateur peut créer un sondage.

### 1.2. Créer un sondage.
*Rappel : il faut être connecté pour pouvoir créer un sondage.*

Dans la barre de navigation, en haut à droite, cliquer sur "**Sondage**". La page de création de sondage apparaît.

![Capture d'écran de la page Sondage](https://github.com/SegolenePoisson/ProjetL3/raw/master/info/img/NouveauSondage.png "Capture d'écran de la page de création d'un sondage.")

En haut, un champ permet de donner un titre au sondage (ou un thème). A gauche se trouvent les différentes options de réponse à choisir : "**Questions**", "**Texte**" et "**Calendrier**".
- "**Questions**" est le type de sondage par défaut, il permet de générer une question avec deux ou trois réponses possibles ; en choisissant également l'option "**Réponses multiples**" grâce au bouton présent en dessous, les sondés pourront choisir une ou plusieurs réponses parmis celles proposées (par défaut, une seule réponse est autorisée). Dans la partie droite, le formulaire de création de sondage permet d'entrer la question voulue, ainsi que les deux ou trois réponses à proposer aux sondés.  
- "**Texte**" permet de créer un sondage à partir d'une question ouverte. Dans la partie droite contenant le formulaire, un champ permet d'entrer la question ouverte. Les sondés disposeront d'un cadre de texte pour y répondre librement.
- "**Calendrier**" permet aux sondés de sélectionner une date sur un calendrier miniature pour répondre à la question renseignée dans le formulaire de création de sondage, dans le champ prévu à cet effet (*cette fonctionnalité n'est pas encore disponible*).

 A la fin du formulaire, une dernière option est proposée : "**Autoriser les votants à accéder aux réponses**", qui permet aux votants de voir les résultats actuels du sondage après avoir soumis leur vote.
 
Une fois les options choisies et le formulaire rempli, cliquer sur "**Envoyer**" pour créer le sondage. Une page s'ouvre alors, indiquant que le sondage a bien été créé et mettant à disposition le lien de partage du sondage.
Vous pourrez ensuite copier ce lien et accéder à votre sondage grâce aux deux boutons en bas de la page.

![Capture d'écran de la page Sondage Créé](https://github.com/SegolenePoisson/ProjetL3/raw/master/info/img/SondageCree.PNG "Capture d'écran de la page suivant la création d'un sondage.")


### 1.3. Partager et consulter les résultats d'un sondage.
*Rappel : il faut posséder un compte et y être connecté.*

Pour partager un sondage, il y a deux possibilités : utiliser le lien de partage ou passer par la liste d'amis (*cette fonctionnalité n'est pas encore disponible*).
Pour utiliser le lien de partage d'un sondage, copier le lien fourni puis l'envoyer aux contacts concernés par les moyens de communication habituels. Ce lien est affiché juste après la création du sondage, mais il est également disponible sur la page "**Profil**", de même que ses résultats. Pour y accéder, cliquer sur le pseudonyme associé au compte, dans la barre de navigation, en haut à droite. 

![Capture d'écran de la page Profil](https://github.com/SegolenePoisson/ProjetL3/raw/master/info/img/profil.png "Capture d'écran de la page du profil.")

La page du profil contient la liste des sondages créés via ce compte. Sur chaque sondage figure le bouton "**Voir les résultats**". Cliquer sur ce bouton affiche une page présentant les résultats du sondage ainsi que le lien de partage, à copier pour l'envoyer aux personnes concernées.

![Capture d'écran de la page Resultats](https://github.com/SegolenePoisson/ProjetL3/raw/master/info/img/results.PNG "Capture d'écran de la page d'affichage des résultats.")


### 1.4. Répondre à un sondage.
*Rappel : il faut posséder un compte et y être connecté pour pouvoir répondre à un sondage.*

Pour répondre à un sondage, ouvrir le lien qui y est associé dans le navigateur. La page de réponse du sondage s'affiche alors.

![Capture d'écran de la page Réponse](https://github.com/SegolenePoisson/ProjetL3/raw/master/info/img/poll.PNG "Capture d'écran de la page de réponse à un sondage.")

Il suffit de compléter les champs et/ou cocher les cases indiquées dans le formulaire de réponse, puis de cliquer sur le bouton "**Valider**". Le vote est alors pris en compte. Si le créateur du sondage avait choisi l'option "Autoriser les votants à accéder aux réponses", une page s'ouvre contenant les résultats actuels du sondage, elle est sinon redirigée vers la page d'accueil du site.

### 1.5. Ajouter des amis.
Ajouter un ami permet de faciliter le partage des sondages (*cette fonctionnalité n'est pas encore disponible*).
Il faut posséder un compte et y être connecté pour ajouter des amis.

Dans la barre de navigation, en haut à droite, cliquer sur "**Amis**". 

![Capture d'écran de la page Amis](https://github.com/SegolenePoisson/ProjetL3/raw/master/info/img/amis.png "Capture d'écran de la liste d'amis.")

Entrer le pseudonyme d'un ami **possédant un compte** puis cliquer sur "**Ajouter cet ami**". Une demande d'ami est envoyée et le message "*Requêtes d'amis en attente*" s'affiche sur la page suivi de la liste des demandes d'ami en attente de réponse. Si l'ami concerné accepte la demande, il est alors ajouté à la liste d'amis.

Quand une demande d'ami est reçue, un message apparaît dans la page "**Amis**" ("*Ces personnes veulent vous ajouter en ami*") ainsi que le pseudonyme de la personne ayant fait la demande, accompagné de deux boutons : l'un permettant d'accepter la demande ("**Accepter**") et l'autre de la refuser ("**Refuser**").

Une fois les amis ajoutés, ils pourront apparaître lors de la diffusion d'un sondage pour le leur envoyer par mail rapidement (*cette fonctionnalité n'est pas encore disponible*).

## 2. Manuel administrateur
*Cette fonctionnalité n'est pas encore disponible.*
<br><br>

---

Autres documents d'information :  
- [document post-mortem](https://github.com/SegolenePoisson/ProjetL3/blob/master/info/post_mortem.md) ;
- [document d'architecture](https://github.com/SegolenePoisson/ProjetL3/blob/master/info/design.md) ;
- [journal de bord](https://github.com/SegolenePoisson/ProjetL3/blob/master/info/journal.md).
