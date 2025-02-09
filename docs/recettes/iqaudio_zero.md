# Configurer le module IQaudio Zero

Ce module permet d'ajouter une sortie son analogique à un Raspberry Pi, pour brancher directement un haut-parleur, ou avoir une sortie ligne.

Récupérez les fichiers de configurations proposés par IQaudio :
```
git clone https://github.com/iqaudio/Pi-Codec.git
```

Appliquez le profil qui convient (lecture seule ici) :
```
cd Pi-Codec
sudo alsactl restore -f Codec_Zero_Playback_only.state

```

## Tester un haut-parleur

Branchez un haut-parleur.

Testez le haut-parleur branché avec un son synthétique :
```
speaker-test -t wav -c 1
```
Quittez le test avec les touches `Ctrl-C`.

Vous pouvez aussi tester le haut-parleur avec un fichier de votre choix :
```
aplay test.wav
```

La commande `alsamixer` permet de régler le volume.
