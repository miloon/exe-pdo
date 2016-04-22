# exe-pdo
exercice de groupe 

+++ ROUTEUR public +++
=> HAYAT

+++ ROUTEUR admin +++
=> MIKE

+++ AFFICHAGE public +++

[accueil] => EMILY
carte cliquable en map + listes des 5 dernières recettes en aléatoire
// pour l'affichage, on va mettre que le header, pas de menu de navigation (la carte suffira)

[détail continent] => HAYAT
- Titre continent 
- Liste des pays du continent : titre pays + ladesc pays (1 à 200 caractères) + nombre total de recettes relatives au pays.
// pour l'affichage, on va faire ça sous forme de vignettes avec l'image du pays, le nom du pays, la desc courtes et les titres des 3 derniers articles.

[détail pays] => MIKE

- IMG du pays
- Titre pays
- Ladesc pays => en toggle
- Recettes du pays classées par date DESC

[détail recettes] => EMILY
- Titre
- Ladesc (nl2br)
- la date
- en bas de la page, on fait un module pour afficher l'auteur, sa bio et ses derniers articles.

[détail utilisateur / profil] => EMILY
- Pseudo
- ladesc
- liste des articles écrits par l'utilisateur

[MENU PUBLIC HORIZONTAL] => HAYAT
- accueil
- continents => pays => recettes
- connexion

[MENU ADMIN VERTICAL] => MIKE en toggle
- accueil
- continents => pays => recettes
- déconnexion

[FOOTER] => MIKE
- plan du site
- crédit (une page qui parle de nous qu'on a fait le site)
- contact (pour nous contacter en cas de bugs)


+++ PAGE CONNEXION +++ => MIKE

[Admin Ajout d'article] => HAYAT

[Admin modif/sup] => EMILY


+++ Vérification par Michaël 2016-04-22 10h00