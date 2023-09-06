# Questions et feuille de route


## Questions

- comment la personne qui arrive peut savoir qu'il existe une balise sonore proche (que tel lieu est équipé) ?
-> la balise indique sa présence (par vibration de la télécommande)

## Axes d'amélioration des premiers prototypes

1. Réception radio plus optimale -- antenne(s)
2. Niveau sonore modifié par paliers lors d'appuis successifs sur la télécommande
3. Niveau sonore adapté au niveau sonore ambiant
4. Niveau sonore règlable manuellement par les opérateurs


## Axes d'amélioration des premiers prototypes (niveau 2)

1. Modèle avec interrupteur pour un message alternatif à la fin, selon si le lieu est ouvert ou non. Pour cela, il faut davantage d'espace de stockage :
    - utiliser une carte avec une mémoire plus importante (copies Raspberry Pico)
    - depuis une carte SD ; peut simplifier la gestion des messages audio pour les utilisateurs


## Fonctionnalités que l'on souhaite expérimenter 

2. Deux balises ou plus pour donner une direction : une au coin et une vers la porte, qui se partage le message pour donner une direction. 
	ex:  "C'est" (balise1)... "Par"(balise2)... "Ici"(balise3) (voir cette vidéo)
    ex:  "Salle ciné n°1" (balise1)... "bip"(balise2)... "bip"(balise3) (voir cette vidéo)
	
	- Balises communicantes, penser à avertir la voisine qu'un signal a été reçu
	- Une seule balise avec récepteur radio, et plusieurs speakers spatialisés
	- Solution mixte

3. Informations audio : sources possibles : message enregistré / wifi + synthèse vocale / donner 
-> possible de lire un son distant par wifi ? pour éviter un espace de stockage supplémentaire ?

4. Avec un deuxieme appel de télécommande (définir un délai entre deux appels), un message audio supplémentaire : "pour avoir plus d'infos appuyez sur le bouton, sous la balise" (léger clic pour l'identifier)
