<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Dozvole');
define('_MD_A_MYMENU_MYPREFERENCES','Postavke');
// index.php
define('_AM_TH_DATETIME', 'Vrijeme');
define('_AM_TH_USER', 'Korisnik');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Tip');
define('_AM_TH_DESCRIPTION', 'Opis');
define('_AM_TH_BADIPS','Loši IP-ovi<br><br><span style="font-weight:normal;">Napišite svaki IP red<br>prazno znači da su svi IP-ovi dopušteni</span>');
define('_AM_TH_GROUP1IPS','Dopušteni IP-ovi za grupu=1<br><br><span style="font-weight:normal;">Napišite svaki IP red.<br>192.168. znači 192.168.*<br>prazno znači da su sve IP adrese dopuštene</span>');
define('_AM_LABEL_COMPACTLOG', 'Kompaktni dnevnik');
define('_AM_BUTTON_COMPACTLOG', 'Kompaktiraj!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Duplicirani (IP,Tip) zapisi bit će uklonjeni');
define('_AM_LABEL_REMOVEALL', 'Ukloni sve zapise');
define('_AM_BUTTON_REMOVEALL', 'Ukloni sve!');
define('_AM_JS_REMOVEALLCONFIRM', 'Svi zapisnici su apsolutno uklonjeni. Jeste li stvarno dobro?');
define('_AM_LABEL_REMOVE', 'Ukloni označene zapise:');
define('_AM_BUTTON_REMOVE', 'Ukloni!');
define('_AM_JS_REMOVECONFIRM', 'Ukloni OK?');
define('_AM_MSG_IPFILESUPDATED', 'Datoteke za IP su ažurirane');
define('_AM_MSG_BADIPSCANTOPEN', 'Datoteka za loš IP ne može se otvoriti');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Datoteka za dopuštanje grupe=1 ne može se otvoriti');
define('_AM_MSG_REMOVED', 'Zapisi su uklonjeni');
define('_AM_MSG_DELFAILED', 'Nije uspjelo brisanje zapisa');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Omogući upisivanje u direktorij konfiguracija: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Upravljač prefiksima');
define('_AM_MSG_DBUPDATED', 'Baza podataka uspješno ažurirana!');
define('_AM_CONFIRM_DELETE', 'Svi će podaci biti odbačeni. U REDU?');
define('_AM_TXT_HOWTOCHANGEDB',"Ako želite promijeniti prefiks,<br> uredite %s/data/secure.php ručno.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Nije sigurno');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Ako vidite sliku -NG- ili poveznica vraća normalnu stranicu, vaš XOOPS_TRUST_PATH nije pravilno postavljen. Najbolje mjesto za XOOPS_TRUST_PATH je izvan DocumentRoot. Ako to ne možete učiniti, morate staviti .htaccess (DENY FROM ALL) ispod XOOPS_TRUST_PATH kao drugi najbolji način.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Provjerite jesu li datoteke PHP unutar TRUST_PATH postavljene samo za čitanje (mora biti pogreška 404,403 ili 500)');
define('_AM_ADV_REGISTERGLOBALS',"Ako je \"UKLJUČENO\", ova postavka poziva na različite napade ubrizgavanjem. Ako možete, postavite 'register_globals off' u php.ini, ili ako nije moguće, stvorite ili uredite .htaccess u vašem XOOPS direktoriju:");
define('_AM_ADV_ALLOWURLFOPEN',"Ako je \"UKLJUČENO\", ova postavka dopušta napadačima izvršavanje proizvoljnih skripti na udaljenim poslužiteljima.<br>Samo administrator može promijeniti ovu opciju.<br>Ako ste administrator, uredite php.ini ili httpd.conf.<br><b>Uzorak httpd.conf:<br> &nbsp; php_admin_flag &nbsp; dopusti_url_fopen &nbsp; off</b><br>Inače, zatražite ga svojim administratorima.");
define('_AM_ADV_USETRANSSID',"Ako je 'ON', vaš ID sesije bit će prikazan u oznakama sidra itd.<br>Da biste spriječili otimanje sesije, dodajte redak u .htaccess u XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Ova postavka poziva na 'SQL Injections'.<br>Ne zaboravite uključiti 'Force sanitizing *' u postavkama ovog modula.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Idi na upravitelja prefiksa');
define('_AM_ADV_MAINUNPATCHED', 'Trebali biste urediti svoj mainfile.php kao što je napisano u README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Vaša tvornica baze podataka je spremna za DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Vaša tvornica baze podataka nije spremna za DBLayer Trapping anti-SQL-Injection. Potrebne su neke zakrpe.');
define('_AM_ADV_SUBTITLECHECK', 'Provjerite radi li Protector dobro');
define('_AM_ADV_CHECKCONTAMI', 'Kontaminacija');
define('_AM_ADV_CHECKISOCOM', 'Izolirani komentari');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'i u njega smjestite donji redak:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefiks');
define('_AM_PROTECTOR_TABLES', 'Tablice');
define('_AM_PROTECTOR_UPDATED', 'Ažurirano');
define('_AM_PROTECTOR_COPY', 'Kopiraj');
define('_AM_PROTECTOR_ACTIONS', 'Akcije');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Zabranite IP adrese na provjerenim zapisima:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Ban!');
define('_AM_JS_BANCONFIRM', 'IP Zabrane u redu?');
define('_AM_MSG_BANNEDIP', 'IP adrese su blokirane');
define('_AM_ADMINSTATS_TITLE', 'Sažetak dnevnika zaštite');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Prošli mjesec');
define('_AM_ADMINSTATS_LAST_WEEK', 'Prošli tjedan');
define('_AM_ADMINSTATS_LAST_DAY', 'Prošli dan');
define('_AM_ADMINSTATS_LAST_HOUR', 'Prošli sat');
