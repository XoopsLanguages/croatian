<?php

// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 migracija');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Rezultati skenera');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Pokreni skeniranje');
define('_XOOPS_SMARTY4_SCANNER_END', 'Izađi iz skenera');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Pravilo');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Poklapanje');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Datoteka');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Popravi broj');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Potreban ručni pregled');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Može se automatski popraviti: svaka varijabla stavke bit će preimenovana dodavanjem "_item" (npr. "foo" postaje "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Ne može se pisati');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Mogućnosti ponovnog skeniranja');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Pritisnite potvrdni okvir "Da" ispod, a zatim kliknite gumb Pokreni skeniranje kako biste pokušali automatski popraviti sve pronađene probleme.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Označi kao dovršeno');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Direktorij predložaka (neobavezno)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Ekstenzija predloška (neobavezno)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 uvodi značajnu promjenu: Smarty 4</h3>

<p>Nažalost, ova promjena može potencijalno poremetiti neke starije teme. Stoga, prije nego što nastavite s nadogradnjom, provjerite jeste li slijedili ove korake:

<li>Pokrenite preflight.php da provjerite ima li zastarjelih tema ili predložaka modula.</li>
<li>Ako se identificiraju bilo kakvi problemi, pogledajte ovaj dokument kako biste razumjeli potrebne izmjene prije nego što nastavite s nadogradnjom.</li>
<li>Nakon što napravite potrebne promjene, ponovno pokrenite preflight.php.</li>
<li>Ako više nema problema, možete započeti proces nadogradnje.</li>
</p>
EOT,
);
