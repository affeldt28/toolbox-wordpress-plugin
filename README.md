# Toolbox

[![License: GPL v2 or later](https://img.shields.io/badge/License-GPLv2_or_later-blue.svg)](https://www.gnu.org/licenses/gpl-2.0)

This plugin is originated by sergej.mueller
Since the original sources aren't online anymore and neither the documentation, I decided to share this with you all.

-   Requires at least: 3.3
-   Tested up to: 5.8.3

Werkzeugkoffer für die Modularisierung der functions.php. WordPress Snippets bequem und übersichtlich als Module verwalten.

## Description

### Bausteinsystem

Vergrößert sich der Funktionsumfang eines WordPress-Blogs, so steigt entweder die Anzahl der installierten Plugins oder die _functions.php_ im Theme wächst durch einen stetigen Neuzugang an Code-Fragmenten.

Und da kleinere Funktionsaufrufe kaum als Plugin-Lösungen zur Verfügung stehen, werden diese gern in die besagte Erweiterungsdatei eingefügt. Im Laufe der Zeit und Entwicklung wird die Datei _functions.php_ schlicht und einfach unübersichtlich und überdimensioniert. Zudem kommt die Tatsache, dass WordPress die Datei sowohl im Blog-Frontend wie auch im Admin-Bereich einbindet und ausführt.

_Toolbox_ wurde konzipiert, um die _functions.php_ zu entlasten oder gänzlich abzuschaffen. Das Prinzip: Gruppierte Code-Snippets aus _functions.php_ werden in Module zusammengefasst - dafür wird jeweils eine PHP-Datei angelegt und mit notwendigen, optionalen Metadaten versehen. Anschließend lädt der Admin die Module ins Toolbox-Verzeichnis _modules_ hoch.

Ab diesem Moment übernimmt das Plugin die Steuerung der Code-Schnipsel: Der Administrator legt fest, in welchem Bereich genau das Modul ausgeführt werden soll. Es kann zwischen _Nur im Frontend_, _Nur im Backend_ und _Im Front- und Backend_ gewählt werden. Einzelne Module lassen sich jederzeit abschalten.

Auf diese Weise müssen WordPress-Hooks und andere Funktionserweiterungen nicht länger als Plugins in Betrieb genommen werden, um überschaubar und übertragbar zu sein. Als Toolbox-Modul ist der Code zugänglich abgelegt und kann mühelos gepflegt werden.

### Stärken

-   Ein- und abschaltbar
-   Zeitsparendes Management der Module
-   Ausstattung der Module mit Metadaten
-   Kombinierbare Bereiche der Einbindung
-   Kein Durcheinander in der _functions.php_
-   Ordnung durch angelegte Toolbox-Module
-   Einfache Weitergabe der WordPress-Snippets
-   Modus für mehr Sicherheit beim Ausführen der Module

### Systemanforderungen

-   PHP ab 5.3
-   WordPress ab 3.3

### Dokumentation

coming soon

## Changelog

### 0.1

-   Toolbox geht online

## Screenshots

1. Toolbox Optionen
