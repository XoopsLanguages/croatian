<?php
// $Id: preferences.php,v 1.16.22.7 2005/07/24 10:23:46 mithyt2 Exp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change

define("_MD_AM_SITEPREF","%s Postavke");
define("_MD_AM_SITENAME","Ime stranice");
define("_MD_AM_SLOGAN","Moto va�e stranice");
define("_MD_AM_ADMINML","Email administratora");
define("_MD_AM_LANGUAGE","Zadani jezik");
define("_MD_AM_STARTPAGE","Modul za va�u po�etnu stranicu");
define("_MD_AM_NONE","Nijedan");
define("_MD_AM_SERVERTZ","Vremenska zona servera");
define("_MD_AM_DEFAULTTZ","Zadana vremenska zona");
define("_MD_AM_DTHEME","Zadana tema");
define("_MD_AM_THEMESET","Izbor tema");
define("_MD_AM_ANONNAME","Korisni�ko ime za anonimne korisnike");
define("_MD_AM_LOADINGIMG","Prika�i preuzimanje... slike?");
define("_MD_AM_USEGZIP","Koristi gzip kompresiju?");
define("_MD_AM_USERCOOKIE","Ime za korisni�ke kola�i�e.");
define("_MD_AM_USERCOOKIEDSC","Ovaj kola�i� sadr�i samo korisni�ko ime i spremljen je na korisni�ko ra�unalo na jednu godinu (ako korisnik to �eli). Ako korisnik ima taj kola�i�, korisni�ko �e ime biti automatski uneseno u prozor prijave.");
define("_MD_AM_USEMYSESS","Upotrijebi uobi�ajen postupak");
define("_MD_AM_USEMYSESSDSC","Izaberi da za prilagodbu postupaka povezane vrijednosti.");
define("_MD_AM_SESSNAME","Ime postupka");
define("_MD_AM_SESSNAMEDSC","Ime postupka (Vrijedi samo, ako je omogu�eno 'upotrijebi uobi�ajen postupak')");
define("_MD_AM_SESSEXPIRE","Vrijeme isteka postupka, u minutama");
define("_MD_AM_SESSEXPIREDSC","Maksimalna du�ina postupka u stanju mirovanja (Vrijedi samo ako je omogu�eno 'upotrijebi uobi�ajen postupak'. Djeluje samo, ako upotrebljavate PHP 4.2.0 ili noviju ina�icu.)");
define("_MD_AM_BANNERS","Aktiviraj prikazivanje reklamnih poruka?");
define("_MD_AM_MYIP","Va�a IP adresa");
define("_MD_AM_MYIPDSC","Ova IP adresa ne�e vrijediti za reklamne poruke");
define("_MD_AM_ALWDHTML","HTML oznake su dozvoljene u svim objavama.");
define("_MD_AM_INVLDMINPASS","Neispravna vrijednost za minimalnu du�inu lozinke.");
define("_MD_AM_INVLDUCOOK","Neispravna vrijednost za ime kola�i�a korisni�ka.");
define("_MD_AM_INVLDSCOOK","Neispravna vrijednost za ime kola�i�a postupka.");
define("_MD_AM_INVLDSEXP","Neispravna vrijednost za vrijeme isteka postupka.");
define("_MD_AM_ADMNOTSET","Email administratora nije odre�en.");
define("_MD_AM_YES","Da");
define("_MD_AM_NO","Ne");
define("_MD_AM_DONTCHNG","Ne mijenjaj");
define("_MD_AM_REMEMBER","Ne zaboravite na chmod 666 datoteku kako bi sistem mogao zapisivati u tu datoteku.");
define("_MD_AM_IFUCANT","Ako ne mo�ete promijeniti dozvolu datoteke, mo�ete ru�no urediti preostali dio te datoteke.");

define("_MD_AM_COMMODE","Zadani na�in prikazivanja komentara");
define("_MD_AM_COMORDER","Zadani redosljed prikazivanja komentara");
define("_MD_AM_ALLOWHTML","Dopusti HTML oznake kod korisni�kih komentara?");
define("_MD_AM_DEBUGMODE","Na�in tra�enja gre�ki");
define("_MD_AM_DEBUGMODEDSC","Vi�e mogu�nosti ispravka gre�aka. Aktivna web stranica bi trebala imati tu opciju isklju�enu.");
define("_MD_AM_AVATARCONF","Uobi�ajne postavke avatara");
define("_MD_AM_CHNGUTHEME","Promijeni sve korisni�ke teme");
define("_MD_AM_NOTIFYTO","Izaberite grupu kojoj �e biti poslana obavijest o novom korisniku");
define("_MD_AM_ALLOWTHEME","Dopusti korisnicima da izaberu temu?");
define("_MD_AM_ALLOWIMAGE","Dopusti korisnicima prikazivanje slike u objavama?");

define('_MD_AM_USESSL', 'Koristi SSL za prijavu?');
define('_MD_AM_SSLPOST', 'SSL Poruka promijenjevog imena');
define('_MD_AM_SSLPOSTDSC', 'Ime promijene koja se koristi za prebacivanje vrijednosti postupka sa OBJAVE. Ako niste sigurni, postavite neko ime koje je te�ko pogoditi.');
define('_MD_AM_DEBUGMODE0','Isklju�eno');
define('_MD_AM_DEBUGMODE1','PHP ispravak gre�ki');
define('_MD_AM_DEBUGMODE2','MySQL/Blokovi ispravak gre�ki');
define('_MD_AM_DEBUGMODE3','Ispravak gre�ki predlo�cima');
define('_MD_AM_GENERAL', 'Op�enite postavke');
define('_MD_AM_IPBAN', 'Blokiranje IP adrese');
define('_MD_AM_DOBADIPS', 'Uklju�i blokiranje IP adresa?');
define('_MD_AM_DOBADIPSDSC', 'Korisnici iz odre�enih IP adresa ne�e mo�i posjetiti va�u stranicu');
define('_MD_AM_BADIPS', 'Unesite IP adrese kojima �e biti onemogu�en pristup do stranice.<br />Razdvojite svaku sa <b>|</b>, neosjetljivo na velika/mala slova, regex omogu�en.');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc �e onemogu�iti pristup posjetiteljima kojima IP adresa zapo�inje sa aaa.bbb.ccc<br />aaa.bbb.ccc$ �e onemogu�iti pristup posjetiteljima kojima IP adresa zavr�ava sa aaa.bbb.ccc<br />aaa.bbb.ccc �e onemogu�iti pristup posjetiteljima, kojima IP adresa sadr�i aaa.bbb.ccc');
define('_MD_AM_PREFMAIN', 'Glavne postavke');
define('_MD_AM_METAKEY', 'Kategorija klju�nih rije�i');
define('_MD_AM_METAKEYDSC', 'Kategorija klju�nih rije�i je niz klju�nih rije�i koje predstavljaju sadr�aj va�e stranice. Unesite klju�ne rije�i razdvojene zarezom ili razmakom. (Npr. XOOPS, PHP, mySQL)');
define('_MD_AM_METARATING', 'Kategorija ocjena');
define('_MD_AM_METARATINGDSC', 'Kategorija ocjena oznaka odre�uje starost va�e stranice i popularnost');
define('_MD_AM_METAOGEN', 'Op�enito');
define('_MD_AM_METAO14YRS', '14 godina');
define('_MD_AM_METAOREST', 'Ograni�eno');
define('_MD_AM_METAOMAT', 'Za odrasle');
define('_MD_AM_METAROBOTS', 'Kategorija robota');
define('_MD_AM_METAROBOTSDSC', 'Robot oznake pretra�ilice ozna�uju sadr�aj indexa i pauka');
define('_MD_AM_INDEXFOLLOW', 'Index, slijedi');
define('_MD_AM_NOINDEXFOLLOW', 'Bez indexa, slijedi');
define('_MD_AM_INDEXNOFOLLOW', 'Index, Ne slijedi');
define('_MD_AM_NOINDEXNOFOLLOW', 'Bez Index, Bez slijeda');
define('_MD_AM_METAAUTHOR', 'Kategorija autora');
define('_MD_AM_METAAUTHORDSC', 'Kategorija autora oznaka odre�uje ime autora dokumenta kojeg se �ita. Podaci koji su na raspolaganju, email adresa, ime poduze�a ili  URL.');
define('_MD_AM_METACOPYR', 'Kategorija autorskih prava');
define('_MD_AM_METACOPYRDSC', 'Kategorija autorskih prava oznaka, odre�uje za�ti�ene dokumente, izjave, objave i komentare autorskim pravima na va�oj stranici.');
define('_MD_AM_METADESC', 'Kategorija opisa');
define('_MD_AM_METADESCDSC', 'Kategorija opisa oznaka, je op�i opis sadr�aja na va�im stranicama');
define('_MD_AM_METAFOOTER', 'Kategorija oznaka i podno�je');
define('_MD_AM_FOOTER', 'Podno�je');
define('_MD_AM_FOOTERDSC', 'Budite sigurni da pi�ete linkove s cjelovitim putem po�ev�i od ( http://), ina�e linkovi ne�e raditi na stranicama s modulima.');
define('_MD_AM_CENSOR', 'Opcije cenzuriranja rije�i');
define('_MD_AM_DOCENSOR', 'Omogu�i cenzuriranje ne�eljenih rije�i?');
define('_MD_AM_DOCENSORDSC', 'Rije�i �e biti cenzurirane, ako je ta opcija omogu�ena. Ova opcija bi mogla biti isklju�ena s ciljem, pove�avanjem brzine u�itavanja stranice.');
define('_MD_AM_CENSORWRD', 'Cenzuriraj rije�i');
define('_MD_AM_CENSORWRDDSC', 'Unesite rije�i, koje �e biti cenzurirane u korisni�kim objavama. Radvojite svaku rije� sa <b>|</b>, nije osjetljivo na velika/mala slova.');
define('_MD_AM_CENSORRPLC', 'Cenzurirane rije�i biti �e zamijenjene sa:');
define('_MD_AM_CENSORRPLCDSC', 'Cenzurirane rije�i �e biti zamijenjene sa znakovima, koje ste unijeli u to polje.');

define('_MD_AM_SEARCH', 'Opcije tra�enja');
define('_MD_AM_DOSEARCH', 'Omogu�i tra�enje po cijeloj stranici?');
define('_MD_AM_DOSEARCHDSC', 'Dozvoli tra�enje po objavama/predmeta unutar va�e stranice');
define('_MD_AM_MINSEARCH', 'Minimalna du�ina klju�ne rije�i');
define('_MD_AM_MINSEARCHDSC', 'Unesite minimalnu du�inu klju�ne rije�i, koju korisnici moraju unijeti pri pretra�inju');
define('_MD_AM_MODCONFIG', 'Postavke modula');
define('_MD_AM_DSPDSCLMR', 'Prika�i uvjete pridr�avanja?');
define('_MD_AM_DSPDSCLMRDSC', 'Izaberite da, za prikazivanje uvjete pridr�avanja na stranici registracije');
define('_MD_AM_REGDSCLMR', 'Uvjeti pridr�avanja registracije');
define('_MD_AM_REGDSCLMRDSC', 'Unesite tekst koji �e biti prikazan u uvjetima pridr�avanja pri registraciji');
define('_MD_AM_ALLOWREG', 'Dozvoli registraciju novih korisnika?');
define('_MD_AM_ALLOWREGDSC', 'Izaberite "da" za prihva�ivanje registracije novih korisnika');
define('_MD_AM_THEMEFILE', 'Obnovi modul prijedlo�ka .html datoteke iz imenika teme/va�a teme/prijedlo�ci?');
define('_MD_AM_THEMEFILEDSC', 'Ako je ova opcije omogu�ena, modul prijedlo�aka .html datoteke �e biti automatski a�urirane, ako ima novih datoteke u imeniku teme/va�a tema/prijedlo�ci za zadanu temu. Ovo bi trebalo biti isklju�no kad stranica krene s javnim radom.');
define('_MD_AM_CLOSESITE', 'Isklju�i stranicu?');
define('_MD_AM_CLOSESITEDSC', 'Izaberite da za isklju�ivanje stranice, tako da samo korsinici u odre�enim grupama imaju pristup stranici.');
define('_MD_AM_CLOSESITEOK', 'Izaberite grupe koje �e imati pristup stranici kada stranica bude isklju�ena.');
define('_MD_AM_CLOSESITEOKDSC', 'Korisnici u webmaster grupi imaju uvjek odobren pristup stranici.');
define('_MD_AM_CLOSESITETXT', 'Razlog isklju�ivanja stranice');
define('_MD_AM_CLOSESITETXTDSC', 'Tekst koji je prikazan kada je stranica isklju�ena.');
define('_MD_AM_SITECACHE', 'Me�uprostor po cijeli stranici');
define('_MD_AM_SITECACHEDSC', 'Za pove�avane u�inka spremi cijeli sadr�aj stranice u odre�eno vrijeme. Nastavljanje ove opcije �e prepisati me�uprostor modula za izravnavanje me�uprostora ako ih ima.');
define('_MD_AM_MODCACHE', 'Me�uspremnik u modulima');
define('_MD_AM_MODCACHEDSC', 'Spremi me�uspremnik modula u odre�eno vrijeme za pobolj�avanje performansi. Opcija me�uspremnika modula �e poni�titi razinu elemnta me�uspremnika ako ga ima.');
define('_MD_AM_NOMODULE', 'Nema me�uspremnika u modulima.');
define('_MD_AM_DTPLSET', 'Zadani predlo�ci');
define('_MD_AM_SSLLINK', 'URL je tamo gdje je SSL prijavna zaklju�ana');

// added for mailer
define("_MD_AM_MAILER","Postavke emaila");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","OD adresa");
define("_MD_AM_MAILFROMDESC","Adresa po�iljatelja");
define("_MD_AM_MAILFROMNAME","OD ime");
define("_MD_AM_MAILFROMNAMEDESC","Ime po�iljatelja");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","OD korisnika");
define("_MD_AM_MAILFROMUIDDESC","Kada sistem po�alje privatnu poruku, koji bi se korisnik trebao prikazati kao po�iljatelj?");
define("_MD_AM_MAILERMETHOD","Na�in dostave emaila");
define("_MD_AM_MAILERMETHODDESC","Uporabljena metoda za slanje emaila. Zadano metoda je  \"PHP mail()\", Koristi druge metode, samo ako ova ne radi.");
define("_MD_AM_SMTPHOST","SMTP ugostitelji");
define("_MD_AM_SMTPHOSTDESC","Lista SMTP servera, s kojima se budete poku�avali spojiti. Odvojeni vi�estruki server s polu-kolonu;");
define("_MD_AM_SMTPUSER","Korisni�ko ime SMTP servera");
define("_MD_AM_SMTPUSERDESC","Korisni�ko ime za povezivanje s SMTP ugostiteljem (SMTPAuth).");
define("_MD_AM_SMTPPASS","Lozinka SMTP servera");
define("_MD_AM_SMTPPASSDESC","Lozinka za povezivanjem s SMTP ugostiteljem (SMTPAuth).");
define("_MD_AM_SENDMAILPATH","Put do slanja po�te");
define("_MD_AM_SENDMAILPATHDESC","Put do programa za slanje po�te (ili nadomjestak) na ovom serveru.");
define("_MD_AM_THEMEOK","Ponu�ene teme");
define("_MD_AM_THEMEOKDSC","Odaberite teme koje korisnici mogu izabrati kao zadana tema");

define("_MD_AM_ADMINTHEME", "Tema administracije");
define("_MD_AM_FRONTSIDE_THEME", "Upotrijebi prednju temu");

define('_MD_AM_MODULEPREF', 'Postavke modula');

// Authentication constants

define("_MD_AM_AUTHENTICATION", "Opcija utvr�ivanja autenti�nosti");
define("_MD_AM_AUTHMETHOD", "Metoda utvr�ivanje autenti�nosti");
define("_MD_AM_AUTHMETHODDESC", "Koju metodu utvr�ivanja autenti�nosti bi koristili za prijavu korisnika.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Ime email polja");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","Ime email polja u va�em LDAP stablu imenika.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Op�i naziv za ime polja");
define("_MD_AM_LDAP_NAME_ATTR_DESC","Op�i naziv za ime polja u va�em LDAP imeniku.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Ime polja za prezime");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","Ime polja za prezime u va�em LDAP imeniku.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Ime polja za krsno ime");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","Ime polja za krsno ime u va�em LDAP imeniku.");
define("_MD_AM_LDAP_UID_ATTR","LDAP - UID Ime polja");
define("_MD_AM_LDAP_UID_ATTR_DESC","ID ime polja u va�em LDAP imeniku.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - DN baza");
define("_MD_AM_LDAP_BASE_DN_DESC", "DN baza (Istaknuto ime) u va�em LDAP stablu imenika.");
define("_MD_AM_LDAP_PORT","LDAP - Broj priklju�ka");
define("_MD_AM_LDAP_PORT_DESC","Broj priklju�ka za pristup va�em LDAP imeniku servera.");
define("_MD_AM_LDAP_SERVER","LDAP - Ime servera");
define("_MD_AM_LDAP_SERVER_DESC","Ime va�eg LDAP imenika servera.");
define("_MD_AM_LDAP_UID_ASDN", "UID kao DN");
define("_MD_AM_LDAP_UID_ASDN_DESC", "UID atribut je kori�ten kao DN");

define("_MD_AM_LDAP_MANAGER_DN", "Upravitelj DN od LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "DN korisnika odobrava do upotrebe tra�ilice (npr. manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "Lozinka LDAP upravitelja");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "Lozinka korisnika s odobrenjem do uporabe tra�ilice");
define("_MD_AM_LDAP_VERSION", "LDAP ina�ica protokola");
define("_MD_AM_LDAP_VERSION_DESC", "LDAP ina�ica protokola : 2 ili 3");
?>