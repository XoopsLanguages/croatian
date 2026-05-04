<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Prikaži/sakrij tekst pomoći');
// License
//define('LICENSE_NOT_WRITEABLE', 'U datoteku licence "%s" NIJE moguće pisati!');
//define('LICENSE_IS_WRITEABLE', '%s Licenca se može pisati.');
// Configuration check page
define('SERVER_API', 'API poslužitelja');
define('PHP_EXTENSION', '%s nastavak');
define('CHAR_ENCODING', 'Kodiranje znakova');
define('XML_PARSING', 'XML parsiranje');
define('REQUIREMENTS', 'Zahtjevi');
define('_PHP_VERSION', 'PHP verzija');
define('RECOMMENDED_SETTINGS', 'Preporučene postavke');
define('RECOMMENDED_EXTENSIONS', 'Preporučena proširenja');
define('SETTING_NAME', 'Naziv postavke');
define('RECOMMENDED', 'Preporučeno');
define('CURRENT', 'Trenutno');
define('RECOMMENDED_EXTENSIONS_MSG', 'Ova proširenja nisu potrebna za normalnu upotrebu, ali mogu biti potrebna za istraživanje
 nekih specifičnih značajki (kao što je podrška za više jezika ili RSS). Stoga se preporučuje njihova ugradnja.');
define('NONE', 'Nijedan');
define('SUCCESS', 'Uspjeh');
define('WARNING', 'Upozorenje');
define('FAILED', 'Neuspjelo');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS čarobnjak za instalaciju');
define('LANGUAGE_SELECTION', 'Odabir jezika');
define('LANGUAGE_SELECTION_TITLE', 'Odaberite jezik');        // L128
define('INTRODUCTION', 'Uvod');
define('INTRODUCTION_TITLE', 'Dobrodošli u XOOPS Čarobnjak za instalaciju');        // L0
define('CONFIGURATION_CHECK', 'Provjera konfiguracije');
define('CONFIGURATION_CHECK_TITLE', 'Provjera konfiguracije servera');
define('PATHS_SETTINGS', 'Postavke putanja');
define('PATHS_SETTINGS_TITLE', 'Postavke putanja');
define('DATABASE_CONNECTION', 'Veza s bazom podataka');
define('DATABASE_CONNECTION_TITLE', 'Veza s bazom podataka');
define('DATABASE_CONFIG', 'Konfiguracija baze podataka');
define('DATABASE_CONFIG_TITLE', 'Konfiguracija baze podataka');
define('CONFIG_SAVE', 'Spremi konfiguraciju');
define('CONFIG_SAVE_TITLE', 'Spremanje konfiguracije vašeg sustava');
define('TABLES_CREATION', 'Kreiranje tablica');
define('TABLES_CREATION_TITLE', 'Kreiranje tablica baze podataka');
define('INITIAL_SETTINGS', 'Početne postavke');
define('INITIAL_SETTINGS_TITLE', 'Unesite početne postavke');
define('DATA_INSERTION', 'Unos podataka');
define('DATA_INSERTION_TITLE', 'Spremanje vaših postavki u bazu podataka');
define('WELCOME', 'Dobrodošli');
define('WELCOME_TITLE', 'Dobro došli na svoju XOOPS stranicu');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Fizičke putanje XOOPS-a');
define('XOOPS_URLS', 'Web lokacije');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS dokumentira korijenski fizički put');
define('XOOPS_ROOT_PATH_HELP', 'Fizička staza do direktorija dokumenata XOOPS (servirani) BEZ kose crte na kraju');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS imenik knjižnice');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS direktorij podatkovnih datoteka');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Lokacija web stranice (URL)'); // L56
define('XOOPS_URL_HELP', 'Glavni URL koji će se koristiti za pristup vašoj instalaciji XOOPS'); // L58
define('LEGEND_CONNECTION', 'Veza s poslužiteljem');
define('LEGEND_DATABASE', 'Baza podataka'); // L51
define('DB_HOST_LABEL', 'Naziv hosta poslužitelja');    // L27
define('DB_HOST_HELP', 'Naziv hosta poslužitelja baze podataka. Ako niste sigurni, <em>localhost</em> radi u većini slučajeva'); // L67
define('DB_USER_LABEL', 'Korisničko ime');    // L28
define('DB_USER_HELP', 'Naziv korisničkog računa koji će se koristiti za povezivanje s poslužiteljem baze podataka'); // L65
define('DB_PASS_LABEL', 'Lozinka');    // L52
define('DB_PASS_HELP', 'Lozinka vašeg korisničkog računa baze podataka'); // L68
define('DB_NAME_LABEL', 'Naziv baze podataka');    // L29
define('DB_NAME_HELP', 'Naziv baze podataka na hostu. Instalater će pokušati stvoriti bazu podataka ako ne postoji'); // L64
define('DB_CHARSET_LABEL', 'Skup znakova baze podataka');
define('DB_CHARSET_HELP', 'MySQL uključuje podršku za skup znakova koja vam omogućuje pohranjivanje podataka korištenjem različitih skupova znakova i izvođenje usporedbi u skladu s različitim uspoređivanjem.');
define('DB_COLLATION_LABEL', 'Sređivanje baze podataka');
define('DB_COLLATION_HELP', 'Uspoređivanje je skup pravila za usporedbu znakova u skupu znakova.');
define('DB_PREFIX_LABEL', 'Prefiks tablice');    // L30
define('DB_PREFIX_HELP', 'Ovaj će prefiks biti dodan svim novim tablicama stvorenim kako bi se izbjegli sukobi imena u bazi podataka. Ako niste sigurni, samo zadržite zadano'); // L63
define('DB_PCONNECT_LABEL', 'Koristiti trajnu vezu');    // L54
define('DB_PCONNECT_HELP', "Zadana postavka je 'Ne'. Ostavite prazno ako niste sigurni"); // L69
define('DB_DATABASE_LABEL', 'Baza podataka');
define('LEGEND_ADMIN_ACCOUNT', 'Administratorski račun');
define('ADMIN_LOGIN_LABEL', 'Prijava administratora'); // L37
define('ADMIN_EMAIL_LABEL', 'E-mail administratora'); // L38
define('ADMIN_PASS_LABEL', 'Administratorska lozinka'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Potvrdi lozinku'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Prethodni'); // L42
define('BUTTON_NEXT', 'Nastavi'); // L47
// Messages
define('XOOPS_FOUND', '%s pronađeno');
define('CHECKING_PERMISSIONS', 'Provjeravam dozvole za datoteke i direktorije...'); // L82
define('IS_NOT_WRITABLE', '%s NIJE moguće pisati.'); // L83
define('IS_WRITABLE', '%s je moguće pisati.'); // L84
define('XOOPS_PATH_FOUND', 'Put pronađen.');
//define('READY_CREATE_TABLES', 'Nisu otkrivene tablice XOOPS.<br>Instalater je sada spreman za stvaranje tablica sustava XOOPS.');
define('XOOPS_TABLES_FOUND', 'Sistemske tablice XOOPS već postoje u vašoj bazi podataka.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS sistemske tablice su stvorene.');
//define('READY_INSERT_DATA', 'Instalater je sada spreman za umetanje početnih podataka u vašu bazu podataka.');
//define('READY_SAVE_MAINFILE', 'Instalater je sada spreman za spremanje navedenih postavki u <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Postavke spremljene');
define('SAVED_MAINFILE_MSG', 'Instalacijski program je spremio navedene postavke u <em>mainfile.php</em> i <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS podaci pronađeni u bazi podataka.');
define('DATA_INSERTED', 'Početni podaci su uneseni u bazu podataka.');
// %s is database name
define('DATABASE_CREATED', 'Baza podataka %s stvorena!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Nije moguće stvoriti tablicu %s'); // L118
define('TABLE_CREATED', 'Tablica %s stvorena.'); // L45
define('ROWS_INSERTED', '%d unosa umetnuto u tablicu %s.'); // L119
define('ROWS_FAILED', 'Nije uspjelo umetanje %d unosa u tablicu %s.'); // L120
define('TABLE_ALTERED', 'Tablica %s ažurirana.'); // L133
define('TABLE_NOT_ALTERED', 'Neuspješno ažuriranje tablice %s.'); // L134
define('TABLE_DROPPED', 'Tablica %s je pala.'); // L163
define('TABLE_NOT_DROPPED', 'Neuspješno brisanje tablice %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Nije moguće pristupiti navedenoj mapi. Provjerite postoji li i može li ga poslužitelj pročitati.');
define('ERR_NO_XOOPS_FOUND', 'U navedenoj mapi nije moguće pronaći instalaciju XOOPS.');
define('ERR_INVALID_EMAIL', 'Nevažeća e-mail adresa'); // L73
define('ERR_REQUIRED', 'Informacija je obavezna.'); // L41
define('ERR_PASSWORD_MATCH', 'Dvije se lozinke ne podudaraju');
define('ERR_NEED_WRITE_ACCESS', 'Poslužitelju se mora dati pristup za pisanje na sljedeće datoteke i mape<br>(tj. <em>chmod 775 ime_direktorija</em> na UNIX/LINUX poslužitelju)<br>Ako nisu dostupni ili nisu ispravno kreirani, izradite ih ručno i postavite odgovarajuća dopuštenja.');
define('ERR_NO_DATABASE', 'Nije moguće stvoriti bazu podataka. Obratite se administratoru poslužitelja za detalje.'); // L31
define('ERR_NO_DBCONNECTION', 'Nije moguće spojiti se s poslužiteljem baze podataka.'); // L106
define('ERR_WRITING_CONSTANT', 'Neuspješno pisanje konstante %s.'); // L122
define('ERR_COPY_MAINFILE', 'Nije moguće kopirati distribucijsku datoteku na %s');
define('ERR_WRITE_MAINFILE', 'Nije moguće pisati u %s. Provjerite dopuštenje datoteke i pokušajte ponovno.');
define('ERR_READ_MAINFILE', 'Nije moguće otvoriti %s za čitanje');
define('ERR_INVALID_DBCHARSET', "Skup znakova '%s' nije podržan.");
define('ERR_INVALID_DBCOLLATION', "Kolacija '%s' nije podržana.");
define('ERR_CHARSET_NOT_SET', 'Zadani skup znakova nije postavljen za XOOPS bazu podataka.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Podrška');
define('LOGIN', 'Autentikacija');
define('LOGIN_TITLE', 'Autentikacija');
define('USER_LOGIN', 'Prijava administratora');
define('USERNAME', 'Korisničko ime:');
define('PASSWORD', 'Lozinka :');
define('ICONV_CONVERSION', 'Konverzija skupa znakova');
define('ZLIB_COMPRESSION', 'Zlib kompresija');
define('IMAGE_FUNCTIONS', 'Funkcije slike');
define('IMAGE_METAS', 'Meta podaci slike (exif)');
define('FILTER_FUNCTIONS', 'Funkcije filtera');
define('ADMIN_EXIST', 'Administratorski račun već postoji.');
define('CONFIG_SITE', 'Konfiguracija stranice');
define('CONFIG_SITE_TITLE', 'Konfiguracija stranice');
define('MODULES', 'Instalacija modula');
define('MODULES_TITLE', 'Instalacija modula');
define('THEME', 'Odaberi temu');
define('THEME_TITLE', 'Odaberi zadanu temu');
define('INSTALLED_MODULES', 'Sljedeći moduli su instalirani.');
define('NO_MODULES_FOUND', 'Nije pronađen nijedan modul.');
define('NO_INSTALLED_MODULES', 'Nijedan modul nije instaliran.');
define('THEME_NO_SCREENSHOT', 'Nije pronađen snimak zaslona');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Snaga lozinke');
define('PASSWORD_DESC', 'Lozinka nije unesena');
define('PASSWORD_GENERATOR', 'Generator lozinki');
define('PASSWORD_GENERATE', 'Generiraj');
define('PASSWORD_COPY', 'Kopiraj');
define('PASSWORD_VERY_WEAK', 'Veoma slaba');
define('PASSWORD_WEAK', 'Slaba');
define('PASSWORD_BETTER', 'Bolje');
define('PASSWORD_MEDIUM', 'Srednje');
define('PASSWORD_STRONG', 'Jaka');
define('PASSWORD_STRONGEST', 'Najjača');
//2.5.7
define('WRITTEN_LICENSE', 'Napisao XOOPS %s Ključ licence: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Pokušaj ponovo');
define('CHMOD_CHGRP_IGNORE', 'Koristi svejedno');
define('CHMOD_CHGRP_ERROR', 'Instalater možda neće moći napisati konfiguracijsku datoteku %1$s.<p>PHP piše datoteke pod korisnikom %2$s i grupom %3$s.<p>Direktorij %4$s/ ima korisnika %5$s i grupu %6$s');
//2.5.9
define("CURL_HTTP", "Knjižnica klijenta URL (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domena kolačića za web stranicu');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domena za postavljanje kolačića. Može biti prazno, puni host s URL (www.example.com) ili registrirana domena bez poddomena (example.com) za dijeljenje među poddomenama (www.example.com i blog.example.com.)');
define('INTL_SUPPORT', 'Funkcije internacionalizacije');
define('XOOPS_SOURCE_CODE', "XOOPS na GitHub");
define('XOOPS_INSTALLING', 'Instalacija');
define('XOOPS_ERROR_ENCOUNTERED', 'Greška');
define('XOOPS_ERROR_SEE_BELOW', 'Pogledajte ispod za poruke.');
define('MODULES_AVAILABLE', 'Dostupni moduli');
define('INSTALL_THIS_MODULE', 'Dodaj %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Nije moguće kopirati konfiguracijsku datoteku %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Stranica');
define('_WEBSITE_SLOGAN', 'Samo ga iskoristi!');
define('_WEBSITE_META_KEYWORDS', 'xoops, okvir za web aplikacije, cms, sustav za upravljanje sadržajem');
define('_WEBSITE_FOOTER', "Pokreće XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Projekt XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Autorska prava © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS je dinamička objektno orijentirana portalska skripta otvorenog koda napisana u PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'Ups');
