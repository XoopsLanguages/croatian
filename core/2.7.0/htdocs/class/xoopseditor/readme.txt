xoopseditor nudi skup urednika za XOOPS

korisnički priručnik:

1 provjerite datoteke xoops_version.php pod /xoopseditor/ kako biste bili sigurni da je novija od vaših trenutnih

2 upload /xoopseditor/ u /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/klasa/xoopseditor/fckeditor
  XOOPS/klasa/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/klasa/xoopseditor/tinymce

3 konfigurirajte postavke gdje je primjenjivo
3.1 ./dhtmlext(svi uređivači)/jezik/: napravite svoju datoteku lokalnog jezika na temelju english.php
3.3 ./dhtmlext(svi uređivači)/editor_registry.php: postavite konfiguracije za uređivač: poredak - redoslijed prikaza u slučaju da se koristi odabir uređivača, 0 za onemogućeno; nohtml - radi za sintaksu koja nije html
3.3 ./FCKeditor/module/: kopirajte datoteke u mape modula u slučaju da su potrebna dopuštenja za učitavanje, pohranu i opcije uređivača specifične za modul
3.3.1 ./FCKeditor/module/fckeditor.config.js: za opcije uređivača, obično ih ne morate mijenjati
3.3.2 ./FCKeditor/module/fckeditor.connector.php: za navođenje mape za pregledavanje datoteka (i pohranjivanje prijenosa) => XOOPS/uploads/XOOPS_FCK_FOLDER/, mapu je potrebno izraditi ručno
3.3.3 ./FCKeditor/module/fckeditor.upload.php: navedite dozvolu za učitavanje i pohranu za učitavanje
3.4 XOOPS/uploads/fckeditor/: za stvaranje mape ako je omogućen FCKeditor, koristi se za prijenose iz kojih mapa za prijenos nije navedena
3.5 ./tinymce/tinymce/jscripts/: preuzmite datoteke lokalnog jezika s http://tinymce.moxiecode.com/language.php

4 provjerite nazive datoteka: za sustav naziva datoteka koji razlikuje velika i mala slova, provjerite jesu li nazivi datoteka doslovno ispravni, tj. "FCKeditor" nije identičan "fckeditor"

5 provjerite /xoopseditor/sampleform.inc.php za vodič za razvoj
