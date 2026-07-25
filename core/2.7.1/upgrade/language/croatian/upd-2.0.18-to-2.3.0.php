<?php
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Fizičke putanje XOOPS-a');
define('LEGEND_DATABASE', 'Skup znakova baze podataka');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS imenik knjižnice');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS direktorij datoteka s podacima');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Skup znakova baze podataka i uspoređivanje');
define('DB_COLLATION_HELP', "Od 4.12 MySQL podržava prilagođeni skup znakova i sortiranje. Međutim, to je složenije od očekivanog, stoga NE RADITE nikakve promjene osim ako niste sigurni u svoj izbor.");
define('DB_COLLATION_NOCHANGE', 'Ne mijenjaj se');

define('XOOPS_PATH_FOUND', 'Put pronađen.');
define('ERR_COULD_NOT_ACCESS', 'Nije moguće pristupiti navedenoj mapi. Provjerite postoji li i može li ga poslužitelj pročitati.');
define('CHECKING_PERMISSIONS', 'Provjeravam dozvole za datoteke i direktorije...');
define('ERR_NEED_WRITE_ACCESS', 'Poslužitelj mora dobiti pristup za pisanje na sljedeće datoteke i mapu<br>(tj. <em>chmod 777 directory_name</em> na UNIX/LINUX poslužitelju)');
define('IS_NOT_WRITABLE', '%s NIJE moguće pisati.');
define('IS_WRITABLE', '%s je moguće pisati.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Greška pri pisanju sadržaja u mainfile.php, ručno upišite sadržaj u mainfile.php.');
