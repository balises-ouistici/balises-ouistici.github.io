# Balises sonores Ouistici

Bienvenue sur la documentation des balises libres et open-source Ouistici.

La norme `NF S 32-002/A1` s'applique aux **"dispositifs répétiteurs de feux de circulation à l'usage des personnes aveugles ou malvoyantes"**.  
On s'appuie sur cette norme pour la définition du signal que les balises sonores reçoivent.  

Il s'agit d'un signal radio centré sur la fréquence `868.3 MHz` et composé d'un préambule, d'une synchronisation, et d'un message fixe : 

![trame norme balises sonores](club microlycée/trame norme balises sonores.png) 



## Prototypes 

Il existe des prototypes pour différents matériels et différents langages de programmation, afin de s'adapter plus largement au matériel et aux compétences disponibles.


- des balises qui utilisent le module radio CC1101 et un microcontrôleur (type Arduino ou Raspberry Pico)

- des balises qui utilisent le module radio usb RTL-SDR et un ordinateur (éventuellement un petit ordinateur Raspberry Pi)


!!! note

    voir le [comparatif des différents matériels](recettes/materiel.md)


## Liens et ressources 

- [Site Ouistici](https://balises-ouistici.org/)
- [Sources Ouistici](https://github.com/orgs/balises-ouistici/repositories/)
- Document PDF ["La balise sonore en questions"](https://www.ecologie.gouv.fr/sites/default/files/DMA-La%20balise%20sonore%20en%20questions%20.pdf) (Délégation ministérielle à l'accessibilité, 2018)
- Documentation PDF du module radio : [CC1101 Datasheet](https://www.ti.com/lit/ds/symlink/cc1101.pdf)
- [Vidéos réalisés par les jeunes du CRDV](https://www.youtube.com/@crdv63000) à propos de mobilité
- Informations à propos des travaux sur la métropole de Clermont-Ferrand sur le site [C le Chantier](https://www.clermontmetropole.eu/c-le-chantier-travaux/)
- La plateforme nationale [Acceslibre](https://acceslibre.beta.gouv.fr/) pour répertorier les éléments d'accessibilité
- La carte collaborative libre [OpenStreetMap](https://www.openstreetmap.org/) accueille également des données d'accessibilité (voir aussi le site [OpenStreetMapFrance](https://www.openstreetmap.fr/))

## Questions et développement

voir [les questions et la feuille de route](questions.md)