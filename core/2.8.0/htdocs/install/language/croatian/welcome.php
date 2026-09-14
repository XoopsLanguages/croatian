<?php
//
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> je open-source
    Objektno orijentirani web izdavački sustav napisan u PHP. Idealan je alat za
    razvoj malih do velikih dinamičnih web stranica zajednice, portala unutar tvrtke, korporativnih portala, weblogova i još mnogo toga.
</p>
<p>
    XOOPS je pušten pod uvjetima
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Opća javna licenca (GPL)</a>
    verzija 2 ili novija, te je slobodan za korištenje i mijenjanje.
    Slobodno je dalje distribuirati sve dok se pridržavate uvjeta distribucije GPL.
</p>
<h3>Zahtjevi</h3>
<ul>
    <li>WWW poslužitelj (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS itd.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 ili više, preporučuje se 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 ili više, preporučuje se 8.4.5+ </li>
</ul>
<h3>Prije vas install</h3>
<ol>
    <li>Ispravno postavite WWW poslužitelj, PHP i poslužitelj baze podataka.</li>
    <li>Pripremite bazu podataka za svoju XOOPS stranicu.</li>
    <li>Pripremite korisnički račun i dopustite korisniku pristup bazi podataka.</li>
    <li>Omogućite upisivanje u ove direktorije i datoteke: %s</li>
    <li>Iz sigurnosnih razloga, preporučujemo da premjestite dva direktorija ispod iz <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">korijen dokumenta</a> i promijenite nazive mapa: %s</li>
    <li>Stvorite (ako već nisu prisutni) i omogućite upisivanje u ove direktorije: %s</li>
    <li>Uključite kolačić i JavaScript vašeg preglednika.</li>
</ol>
<h3>Posebne napomene</h3>
<ol>
    <li>Neke specifične kombinacije softvera sustava mogu zahtijevati dodatne konfiguracije za rad
    s XOOPS. Ako se neka od ovih tema odnosi na vaše okruženje, pogledajte cijelu
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    priručnik za instalaciju</a> za više informacija.<br><br>

    <li><strong>SELinux</strong> omogućeni sustavi (kao što je <strong>CentOS</strong>  i <strong>RHEL</strong>) može zahtijevati promjene u sigurnosnom kontekstu
    za XOOPS direktorije uz uobičajene dozvole za datoteke kako bi se u direktorije moglo pisati.
    Konzultirajte dokumentaciju svog sustava i/ili administratora sustava.
</ol>
';

return $content;

