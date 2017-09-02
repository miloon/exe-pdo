# exe-pdo
exercice de groupe sur le thème "Recettes du monde"

### Structure de la DB
=> Hayat

### Données de la DB
=> Miloon (pour voir les bugs et s'assurer du bon affichage des pages)

### ROUTEUR public
=> Hayat

### ROUTEUR admin
=> Mike

### AFFICHAGE public

#### [accueil] => Miloon
carte cliquable en map + listes des 5 dernières recettes en aléatoire
// pour l'affichage, on va mettre que le header, pas de menu de navigation (la carte suffira)

#### [détail continent] => Hayat
- Titre continent 
- Liste des pays du continent : titre pays + ladesc pays (1 à 200 caractères) + nombre total de recettes relatives au pays.
// pour l'affichage, on va faire ça sous forme de vignettes avec l'image du pays, le nom du pays, la desc courtes et les titres des 3 derniers articles.

#### [détail pays] => Mike
- IMG du pays
- Titre pays
- Ladesc pays => en toggle
- Recettes du pays classées par date DESC

#### [détail recettes] => Miloon
- Titre
- Ladesc (nl2br)
- la date
- en bas de la page, on fait un module pour afficher l'auteur, sa bio et ses derniers articles.

#### [détail utilisateur / profil] => Miloon
- Pseudo
- ladesc
- liste des articles écrits par l'utilisateur

#### [MENU PUBLIC HORIZONTAL] => Hayat
- accueil
- continents => pays => recettes
- connexion

#### [MENU ADMIN VERTICAL] => Mike en toggle
- accueil
- continents => pays => recettes
- déconnexion
- // edit => on va faire un menu admin avec accueil + ajout + modif/sup + déconnexion

#### [FOOTER] => Mike
- crédit (une page qui parle de nous qu'on a fait le site) => EMILY
- contact (pour nous contacter en cas de bugs) => EMILY


#### PAGE CONNEXION +++ => Mike

#### [Admin Ajout d'article] => Hayat

#### [Admin modif/sup] => Miloon
- panneau d'administration pour les articles + filtres
- panneau d'administration pour les pays + filtres
- pages d'édition pour les articles avec message de succès ou d'erreur
- pages d'édition pour les pays avec message de succès ou d'erreur


#### Vérification par Michaël 2016-04-22 10h00
