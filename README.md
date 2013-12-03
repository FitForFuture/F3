F3
==

Projekt Webseite

Changelog

Standard Template
Authored by goem987 on 03.12.2013 at 16:35.

- HTML/CSS Template erstellt
- Bootstrap eingebunden
- Index in folgende Bereiche gegliedert: head, navbar, main, footer

Es Folgt:
Einbindung des modularen Contents aufrufbar per URL


Module
Authored by goem987 on 03.12.2013 at 20:25.

Hinzugekommen sind:
- func.php (hier erscheinen alle kommen alle verwendeten PHP-Funktionen
rein)
- sidebar.php (Inhalt der Seitenleiste)
- Modul-Ordner main. Dort liegen die Inhalte der Seiten: Login, FAQ,
Start (Kann ergänzt werden)
- Die main.php steuert die URL.

Ruft man http://localhost/ auf wird automatisch der Inhalt der Datei
start.php eingebettet.
- Ruft man http://localhost/index.php?do=login auf, so wird die login.php
im Hauptbereich geladen
- das gleiche gilt für die FAQ: http://localhost/index.php?do=faq



