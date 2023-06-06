# Lancer un script au démarrage du Raspberry Pi

Éditer le fichier `/etc/rc.local`, en ajoutant votre commande juste au-dessus de la ligne `exit 0`.

Pour lancer un script Python par exemple, le fichier pourra ressembler à cela :
```
...
...
/usr/bin/python3 /home/ouistici/ouistici.py &
exit 0
```
À noter :

- le caractère `&` permet de lancer le script en arrière-plan
- vous devez avoir le droit d'exécuter le script
- le script sera lancé par l'utilisateur `root`


Source : [raspberry-pi.fr/executer-programme-demarrage](https://raspberry-pi.fr/executer-programme-demarrage/)