<?php
// $Id: global.php,v 1.15 2004/06/14 14:22:14 skalpa Exp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","Molim pri�ekajte");
define("_FETCHING","U�itivanje...");
define("_TAKINGBACK","Vra�ate se na mjesto gdje ste bili....");
define("_LOGOUT","Odjava");
define("_SUBJECT","Tema");
define("_MESSAGEICON","Ikona poruke");
define("_COMMENTS","Komentari");
define("_POSTANON","Objavljuj anonimno");
define("_DISABLESMILEY","Isklju�i smaili�e");
define("_DISABLEHTML","Isklju�i HTML");
define("_PREVIEW","Pregledaj");

define("_GO","Potvrdi!");
define("_NESTED","Ugnje�djeno");
define("_NOCOMMENTS","Nema komentara");
define("_FLAT","Ravno");
define("_THREADED","Nanizan");
define("_OLDESTFIRST","Prvo starije");
define("_NEWESTFIRST","Prvo novije");
define("_MORE","vi�e...");
define("_MULTIPAGE","Da bi va� �lanak bio prikazan na vi�e stranica, ubacite rije� <font color=red>[pagebreak]</font> (sa zagradama) u �lanak.");
define("_IFNOTRELOAD","Ukoliko se stranica ne u�ita automatski, kliknite <a href=%s>ovdje</a>");
define("_WARNINSTALL2","UPOZORENJE: Mapa %s postoji na va�em serveru. <br />Obri�ite ovu mapu iz sigurnosnih razloga.");
define("_WARNINWRITEABLE","UPOZORENJE: Datoteka %s je pisana od strane servera. <br />Molim promjenite prava za ovu datoteku iz sigurnosnih razloga.<br /> Kod Unix (444), u Win32 (read-only)");

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Objavio");
define("_VISITWEBSITE","Posjetite web stranicu");
define("_SENDPMTO","Po�alji privatnu poruku za %s");
define("_SENDEMAILTO","Po�alji email za %s");
define("_ADD","Dodaj");
define("_REPLY","Odgovori");
define("_DATE","Datum objave");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Glavna");
define("_MANUAL","Ru�no");
define("_INFO","Podaci");
define("_CPHOME","Administraciski izbornik");
define("_YOURHOME","Po�etna stranica");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Tko je online");
define('_GUESTS', 'Gosti');
define('_MEMBERS', '�lanovi');
define("_ONLINEPHRASE","<b>%s</b> korisnika je online <br>");
define("_ONLINEPHRASEX","<b>%s</b> korisnika pregledava <b>%s</b>");
define("_CLOSE","Zatvori");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Citat:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Oprostite, nemate prava za pristup ovoj stranici.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Ne");
define("_YES","Da");
define("_EDIT","Uredi");
define("_DELETE","Izbri�i");
define("_SUBMIT","Podnesi");
define("_MODULENOEXIST","Izabrani modul ne postoji!");
define("_ALIGN","Poravnavanje");
define("_LEFT","Lijevo");
define("_CENTER","Centar");
define("_RIGHT","Desno");
define("_FORM_ENTER", "Molimo upi�ite %s");
// %s represents file name
define("_MUSTWABLE","Datoteka %s mora biti pisana od strane servera!");
// Module info
define('_PREFERENCES', 'Postavke');
define("_VERSION", "Ina�ica");
define("_DESCRIPTION", "Opis");
define("_ERRORS", "Gre�ke");
define("_NONE", "Ni�ta");
define('_ON','uklju�eno');
define('_READS','�itanja');
define('_WELCOMETO','Dobrodo�li na %s');
define('_SEARCH','Tra�i');
define('_ALL', 'Sve');
define('_TITLE', 'Naslov');
define('_OPTIONS', 'Opcije');
define('_QUOTE', 'Citat');
define('_LIST', 'Lista');
define('_LOGIN','Prijava');
define('_USERNAME','Korisni�ko ime: ');
define('_PASSWORD','Lozinka: ');
define("_SELECT","Izaberite");
define("_IMAGE","Slika");
define("_SEND","Po�alji");
define("_CANCEL","Odustani");
define("_ASCENDING","A-� redoslijed");
define("_DESCENDING","�-A redoslijed");
define('_BACK', 'Nazad');
define('_NOTITLE', 'Bez naslova');

/* Image manager */
define('_IMGMANAGER','Upravljanje slikama');
define('_NUMIMAGES', '%s slike');
define('_ADDIMAGE','Dodaj sliku');
define('_IMAGENAME','Ime:');
define('_IMGMAXSIZE','Maksimalna dozvoljena veli�ina slike (bajtova):');
define('_IMGMAXWIDTH','Maksimalna dozvoljena �irina slike (pixela):');
define('_IMGMAXHEIGHT','Maximalna dozvoljena visina slike (pixela):');
define('_IMAGECAT','Kategorija:');
define('_IMAGEFILE','Slika:');
define('_IMGWEIGHT','Redoslijed prikazivanja slika u upravitelju slika:');
define('_IMGDISPLAY','�elite li prikazati ovu sliku?');
define('_IMAGEMIME','MIME tip:');
define('_FAILFETCHIMG', 'Ne mogu u�itati datoteku %s');
define('_FAILSAVEIMG', 'Neuspjelo spremanje slike %s u bazu podataka');
define('_NOCACHE', 'Nema me�uspremnika');
define('_CLONE', 'Kopija');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "Po�ni sa");
define("_ENDSWITH", "Zavr�i sa");
define("_MATCHES", "Na�eno");
define("_CONTAINS", "Sadr�i");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Registracija");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","VELI�INA");  // font size
define("_FONT","FONT");  // font family
define("_COLOR","BOJA");  // font color
define("_EXAMPLE","UZORAK");
define("_ENTERURL","Upi�ite URL linka kojeg �elite objaviti:");
define("_ENTERWEBTITLE","Unesite naslov web stranice:");
define("_ENTERIMGURL","Upi�ite URL slike koju �elite objaviti.");
define("_ENTERIMGPOS","A sad, upi�ite poziciju slike.");
define("_IMGPOSRORL","'D' ili 'd' za desno, 'L' ili 'l' za lijevo, ili ostavte prazno.");
define("_ERRORIMGPOS","GRE�KA! Upi�ite poziciju slike.");
define("_ENTEREMAIL","Upi�ite email adresu koju �elite dodati.");
define("_ENTERCODE","Upi�ite kod koji �elite dodati.");
define("_ENTERQUOTE","Upi�ite tekst koji �elite citirati.");
define("_ENTERTEXTBOX","Upi�ite tekst u polje.");
define("_ALLOWEDCHAR","Maksimalan broj znakova: ");
define("_CURRCHAR","Trenutni broj znakova: ");
define("_PLZCOMPLETE","Molimo vas da upi�ete naslov u tjelo poruke.");
define("_MESSAGETOOLONG","Va�a poruka je preduga�ka.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 sekunda');
define('_SECONDS', '%s sekundi');
define('_MINUTE', '1 minuta');
define('_MINUTES', '%s minuta');
define('_HOUR', '1 sat');
define('_HOURS', '%s sati');
define('_DAY', '1 dan');
define('_DAYS', '%s dana');
define('_WEEK', '1 tjedan');
define('_MONTH', '1 mjesec');

define("_DATESTRING","d.m.Y H:m:s");
define("_MEDIUMDATESTRING","d.m.Y H:m");
define("_SHORTDATESTRING","d.m.Y");
/*
The following characters are recognized in the format string:
A - "AM" ili "PM"
d - dan u mjesecu, 2 brojeva s glavnim nulama; tj. "01" do "31"
D - dan u tjednu, tekstualno, 3 slova; tj. "Pon"
F - mjesec, tekstualno, duga�ko; tj. "Sije�anj"
h - sat, format 12-sata; tj. "01" do "12"
H - sat, format 24-sata; tj. "00" do "23"
g - sat, 12-sata format bez glavnih nula; tj. "1" do "12"
G - sat, 24-sata format bez glavnih nula; tj. "0" do "23"
i - minuta; tj. "00" do "59"
j - dani u mjesecu bez glavnih nula; tj. "1" do "31"
l (malim slovima 'L') - dani u tjednu, tekstualno, duga�ko; i.e. "Friday"
L - bulovski za prijestupnu godinu; tj. "0" ili "1"
m - mjesec; tj. "01" do "12"
n - mjesec bez glavnih nula; tj. "1" do "12"
M - mjesec, tekstualno, 3 slova; tj. "Sij"
s - sekunde; tj. "00" do "59"
S - Hrvatski redni nastavak, tekstualan, 2 slova; tj. "th", "nd"
t - velik broj dana u odre�enom mjesecu; tj. "28" do "31"
T - Vremenska zona je postavljena s ovog ure�aja; tj. "MDT"
U - sekunde od epoha
w - dan u tjednu, broj�ano, tj. "0" (Nedelja) do "6" (Subota)
Y - godina, 4 brojeva; tj. "2006"
y - godina, 2 broja; tj. "06"
z - dan u godini; tj. "0" do "365"
Z - poravnavanje vremenske zone u sekundama (tj. "-43200" do "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'windows-1250');
define('_LANGCODE', 'hr');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES", "0");
?>