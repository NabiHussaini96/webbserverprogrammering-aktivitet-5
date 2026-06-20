# Aktivitet 5 - Enkel databasdriven webbplats

## Beskrivning

Detta projekt är en enkel databasdriven blogg utvecklad i PHP och MySQL.

Alla besökare kan läsa publicerade inlägg, medan endast inloggade användare kan skapa nya inlägg.

Projektet använder PHP-sessioner för autentisering och MySQL för lagring av data.

## Funktioner

- Publik blogg där alla kan läsa inlägg
- Inloggning med PHP-sessioner
- Skapa nya blogginlägg
- Lagring av inlägg i MySQL-databas
- Visning av inlägg från databasen
- Utloggningsfunktion
- Prepared Statements för ökad säkerhet
- XSS-skydd med htmlspecialchars()

## Databas

Databas:

aktivitet5_db

Tabell:

posts

Kolumner:

- id
- rubrik
- innehall
- skribent
- datum

## Inloggning

Användarnamn:

admin

Lösenord:

1234

## Tekniker

- PHP
- MySQL
- MySQLi
- phpMyAdmin
- HTML
- CSS
- Git
- GitHub

## Säkerhet

Projektet använder:

- Prepared Statements för att minska risken för SQL-injektion
- htmlspecialchars() för att minska risken för XSS-attacker
- Sessionshantering för att skydda sidor som kräver inloggning

## Starta projektet

1. Starta Apache och MySQL i XAMPP.
2. Öppna phpMyAdmin.
3. Skapa databasen aktivitet5_db.
4. Skapa tabellen posts.
5. Placera projektet i htdocs.
6. Besök:

http://localhost/aktivitet5

## Projektstruktur

aktivitet5/

- index.php
- login.php
- dashboard.php
- save_post.php
- messages.php
- logout.php
- db.php
- style.css
- README.md

## GitHub

Projektet versionshanteras med Git och GitHub.
Alla större ändringar har sparats som separata commits för att dokumentera utvecklingsprocessen.