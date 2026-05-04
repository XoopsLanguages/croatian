<?php

// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Nadogradnja</h2>

<p>
<em>Nadogradnja</em> ispitat će ovu instalaciju XOOPS i primijeniti sve potrebne zakrpe kako bi bila kompatibilna 
s novim kodom XOOPS. Zakrpe mogu uključivati promjene baze podataka, dodavanje zadanih postavki za nove
stavke konfiguracije, ažuriranja datoteka i podataka i više.
<p>
Nakon svake zakrpe, program za nadogradnju će izvijestiti o statusu i čekati da se vaš unos nastavi. na
na kraju nadogradnje kontrola će prijeći na funkciju ažuriranja modula sustava.

<div class="alert alert-warning">
Kada se nadogradnja završi, ne zaboravite:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> izbrišite mapu za nadogradnju</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> ažurirati sve module koji su se promijenili</li>
</div>

EOT,
);
