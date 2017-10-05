# SCRIN

Configuration du serveur

$ sudo raspi-config 
	Interfacing Options
		Activer le serveur SSH 
	Dans Advanced Options 
		Expand fileSystem 
	Dans Localisation Option 
		Change Locale 
			Desactiver en_GB.UTF-8 UTF-8 
			Activer fr_FR.UTF-8 UTF-8 
			Confirmer fr_FR.UTF-8 
		Change TimeZone 
	HostName Ronin 
	Accepter le reboot
 
Securisation de connexion au serveur

$ sudo adduser "utilisateur" 
$ sudo visudo 
Ajouter "utilisateur" ALL=(ALL) NOPASSWD: ALL à la fin du fichier (Ctrl + O pour enregistrer, Ctrl + X pour fermer) 
$ logout 
login avec "utilisateur" 
$ sudo deluser --remove-home pi 
$ sudo passwd 
Mise à jour du serveur

$ sudo apt update 
$ sudo apt upgrade 

Installation des packages

$ sudo apt install apache2 
$ sudo apt install php5 
$ sudo apt install mysql-server php5-mysql 
$ sudo apt install phpmyadmin 
$ sudo apt install git 
