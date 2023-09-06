# CLUB Microlycée

!!! info "Contexte"

    Les premiers prototypes des balises Ouistici ont été élaborés par les Petit⋅e⋅s Débrouillard⋅e⋅s Aura et les lycéens et lycéennes du microlycée LIANE à Riom.  
    Jordan, Nils, Enora, Samuel, Colas, Noa.

## Éléments d'accessibilité en ville

Exploration sur le terrain : 
Passages piétons ; présence de bandes d'éveil de vigilance (podotactile)
Nous récupérrons une télécommande à la mairie et allons tester les feux sonores

## OpenStreetMap 

À l'aide l'application mobile [**StreetComplete**](https://streetcomplete.app/) nous complétons les données à partir de ce qu'on observe sur le terrain.  
StreetComplete permet de choisir des éléments auxquels on souhaite contribuer, ou bien on peut se laisser guider selon ce qu'il y a sur autour de nous.

## Signal des télécommandes et norme des feux sonores

Sur 3 télécommandes nous avons étudié le signal de 2 d'entre elles. On a remarqué qu'elles utilisent le même signal et le répètent, mais dans un même laps de temps elles le répètent un nombre différent de fois.

![télécommandes de différentes marques](telecommandes.jpg) 

En effet les télécommandes envoyant à une fréquence spécifique aux balises déstinées au nonvoyants et malvoyants sont soumises a une norme, comme les feux sonores.

La fréquence utilisée pour communiquer par ondes radio entre la télécommande et le feu sonore ou la balise sonore est le 868,3 MHz (méga-hertz).

Pour les feux sonores par exemple il faut que le signal déclenchant "stop" provoque un son plus fort que celui qui indique qu'on peut traverser.
![norme de son](son-balise.png) 

Dans la norme, il est indiqué que les télécommandes doivent pouvoir envoyer un signal "signal universel", qui va être détecté par le feu sonore ou par la balise sonore. 

Les deux télécommandes testées produisent ce signal, celle de Clermont a trois boutons et le premier utilise ce signal universelle alors que celle prêtée par la mairie de Riom n'a qu'un bouton qui utilise cette fréquence.

Pour celle de Clermont appuyer sur le bouton déclenche le signal un court instant et pour celle de Riom on peut appuyer longtemps sur le bouton pour activer un signal continu avec un intervale de 10 secondes.

La trame du signal envoyé par la télécommande et reconnu par le feu sonore ou la balise sonore (ce qu'on a appelé "signal universel") est celle-ci :

![trame norme balises sonores](trame norme balises sonores.png) 


## Photos
Vous pouvez trouver plus de photos ici :
media.lespetitsdebrouillards-aura.org