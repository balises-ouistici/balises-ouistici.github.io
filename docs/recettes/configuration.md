# Configurer la balise (Raspberry Pi)

## Connection automatique à un routeur Wifi

Écrire dans le fichier `/etc/wpa_supplicant/wpa_supplicant.conf` :

```
network={
   ssid="SSID Wifi Network 1"
   psk="SecretPassWord1"
}
network={
   ssid="SSID Wifi Network 2"
   psk="SecretPassWord2"
}
```

## Bouton d'arrêt (halt)

Ajouter ou décommenter cette ligne dans le fichier `/boot/firmware/config.txt` (ou `/boot/config.txt`) :

```
# halt button
dtoverlay=gpio-shutdown,gpio_pin=27,debounce=800
```

Vous pouvez adapter le gpio_pin à la broche GPIO sur laquelle le bouton d'arrêt est branché.

