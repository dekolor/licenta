# SmartHome

SmartHome este o aplicatie ce are rolul de a oferi un singur dashboard pentru device-uri bazate pe servicii diferite. De asemenea, a fost proiectul meu de licenta.

# Demo
Demo: https://licenta.dekolor.ro/

User: test@dekolor.ro

Pass: test123

*In demo nu se poate porni/opri pe bune un device si nici automatizarile nu modifica starea acestuia.*

## Installation

* Descarca proiectul local sau direct pe server
* Dezarhiveaza in folderul root al webserverului sau redirectioneaza webserverul catre folderul "/public" al proiectului
* Importa fisierul "db.sql" in baza de date pentru a genera tabelele necesare rularii aplicatiei
* Adauga ca si cron job comanda "curl https://%APP_URL%/cron/run >/dev/null 2>&1" cu o frecventa de 1 minut pentru a rula automatizarile la data si ora necesara

## Screenshots

### Dashboard
![](https://i.imgur.com/RGBxvsg.png)

### Lista device-uri
![](https://i.imgur.com/R6AQebt.png)

### Lista automatizari
![](https://i.imgur.com/2nc3Mny.png)

### Adaugarea unei automatizari
![](https://i.imgur.com/Cv7h2hm.png)

### Lista de utilizatori
![](https://i.imgur.com/99LZTNk.png)

### Setari
![](https://i.imgur.com/oi8AzPK.png)
