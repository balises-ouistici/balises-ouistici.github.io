# Longueur de l'antenne

Pour l'antenne du recepteur, soudé au module radio **CC1101** ou fixé à la **clé RTL-SDR**, on utilise un fil conducteur. 

La longueur de ce fil dépend de la fréquence radio. Pour nous, il s'agit du **868.3 MHz** (méga hetrz).



```
Longueur antenne = c / f
```
où 
- `c` est la vitesse de la lumière dans le vide : 299 792 458 m/s (mètres par seconde)
- `f` est la fréquence radio avec laquelle on travaille : 868 300 000 Hz (Hertz)

```
Longueur antenne = 299 792 458 / 868 300 000 
                 = 0,345 m (mètres)
                 = 34,5 cm (centimètres)
```

En réalité, nous pouvons utiliser des longueurs plus petites en divisant par 2, 4, 8..
En diminuant la longueur de l'antenne, on perd tout de même en force du signal.

Nous utiliserons la moitié de la longueur calculée, soit :

```
34,5 cm / 2 = 17,3 cm (centimètres)
```
 