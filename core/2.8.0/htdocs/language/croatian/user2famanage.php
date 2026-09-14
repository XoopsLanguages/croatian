<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Dvofaktorska autentifikacija');
define('_US_2FAM_PASSWORD', 'Vaša trenutačna lozinka');
define('_US_2FAM_ENABLE', 'Postavi aplikaciju za autentifikaciju');
define('_US_2FAM_CONFIRM', 'Potvrdi aplikaciju za autentifikaciju');
define('_US_2FAM_CHOOSE', 'Odaberite kako želite primati drugi korak: aplikacijom za autentifikaciju ili kodom putem e-pošte.');
define('_US_2FAM_ENABLE_EMAIL', 'Upotrebljavaj kodove e-poštom');
define('_US_2FAM_EMAIL_HELP', 'Kodovi e-poštom: šesteroznamenkasti kod šalje se na %s pri svakoj prijavi. Manje sigurno od aplikacije za autentifikaciju jer taj korak može proći svatko tko može pročitati vašu e-poštu.');
define('_US_2FAM_EMAIL_STEP', 'Poslali smo šesteroznamenkasti kod na %s. Unesite ga ispod za potvrdu. Vrijedi deset minuta.');
define('_US_2FAM_CONFIRM_EMAIL', 'Potvrdi kodove e-poštom');
define('_US_2FAM_CODE_HELP_EMAIL', 'Šesteroznamenkasti kod iz e-poruke koju smo vam upravo poslali.');
define('_US_2FAM_ENABLED_EMAIL', 'Kodovi e-poštom su omogućeni. Za promjenu unesite trenutačnu lozinku i kod poslan e-poštom, ili kod za oporavak. Upotrijebite gumb ispod za zahtjev koda.');
define('_US_2FAM_SEND', 'Pošalji mi kod');
define('_US_2FAM_MANUAL', 'Ključ za ručno postavljanje');
define('_US_2FAM_SCAN', 'QR kod za vašu aplikaciju za autentifikaciju');
define('_US_2FAM_STEP_APP', 'Potrebna vam je aplikacija za autentifikaciju: bilo koja aplikacija ili upravitelj lozinkama koji generira vremenski jednokratne kodove (TOTP) funkcionirat će, na telefonu ili računalu. Ako je još nemate, prvo instalirajte onu po vlastitom izboru (npr. Google Authenticator, Microsoft Authenticator, Aegis ili FreeOTP).');
define('_US_2FAM_STEP_ADD', 'U aplikaciji dodajte račun: skenirajte ovaj QR kod, ili odaberite ručni unos i upišite ključ za postavljanje prikazan ispod.');
define('_US_2FAM_STEP_CODE', 'Aplikacija sada prikazuje šesteroznamenkasti kod koji se mijenja svakih 30 sekundi. Unesite trenutačno prikazani kod u polje ispod i potvrdite.');
define('_US_2FAM_CODE_HELP', 'Šesteroznamenkasti kod koji vaša aplikacija za autentifikaciju trenutačno prikazuje.');
define('_US_2FAM_HTTP', 'Ova veza koristi obični HTTP. Vaša lozinka, sesija, ključ za postavljanje i kodovi za oporavak mogu biti presretnuti. Upotrebljavajte HTTPS kad god je moguće.');
define('_US_2FAM_CODES', 'Spremite ove kodove za oporavak sada');
define('_US_2FAM_CODES_HELP', 'Svaki kod djeluje jednokratno. Ovi kodovi neće se ponovno prikazati. Čuvajte ih na sigurnom mjestu, odvojeno od ovog računa.');
define('_US_2FAM_DISABLE', 'Onemogući dvofaktorsku autentifikaciju');
define('_US_2FAM_REGENERATE', 'Zamijeni kodove za oporavak');
define('_US_2FAM_ENABLED', 'Aplikacija za autentifikaciju je postavljena. Za promjenu unesite trenutačnu lozinku i kod za autentifikaciju ili oporavak.');
define('_US_2FAM_DISABLED', 'Dvofaktorska autentifikacija je onemogućena.');
define('_US_2FAM_PAUSED', 'Stranica je pauzirala dvofaktorske provjere. Vaš faktor je zadržan, a opcija „zapamti me” ostaje nedostupna za postavljene račune.');
define('_US_2FAM_UNAVAILABLE', 'Postavljanje ili upravljanje dvofaktorskom autentifikacijom nije dostupno. Kontaktirajte administratora stranice.');
define('_US_2FAM_STARTAGAIN', 'Postavljanje je isteklo ili se račun promijenio. Unesite lozinku za ponovno pokretanje postavljanja.');
define('_US_2FAM_BADPASSWORD', 'Vaša trenutačna lozinka nije prihvaćena.');
define('_US_2FAM_RESET', 'Poništi dvofaktorsku autentifikaciju ovog korisnika');
define('_US_2FAM_STATUS_NONE', 'Nije postavljeno');
define('_US_2FAM_STATUS_TOTP', 'Aplikacija za autentifikaciju postavljena');
define('_US_2FAM_STATUS_EMAIL', 'Kodovi e-poštom postavljeni');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Status nedostupan');
define('_US_2FAM_RESET_HELP', 'Ovo onemogućuje drugi faktor korisnika, bez obzira na postavljenu metodu, i opoziva njegove kodove za oporavak i kolačiće „zapamti me”. Postojeće prijavljene sesije ostaju aktivne. Za potvrdu unesite vlastitu administratorsku lozinku.');
define('_US_2FAM_RESET_DONE', 'Dvofaktorska autentifikacija korisnika je poništena.');
define('_US_2FAM_BACK', 'Natrag na račun');
define('_US_2FAM_DONE', 'Dvofaktorska autentifikacija je omogućena.');
define('_US_2FAM_REPLACED', 'Prethodni kodovi za oporavak su opozvani.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: dvofaktorska autentifikacija promijenjena');
define('_US_2FAM_NOTICE_BODY', 'Dvofaktorska autentifikacija ili kodovi za oporavak vašeg računa na %s promijenjeni su s %s. Ako to niste bili vi, kontaktirajte administratora stranice.');
define('_US_2FAM_RESET_SUBJECT', '%s: administrator je poništio vašu dvofaktorsku autentifikaciju');
define('_US_2FAM_RESET_BODY', 'Administrator je onemogućio vaš drugi faktor i opozvao njegove kodove za oporavak na %s s %s. Postojeće prijavljene sesije ostaju aktivne. Prijavite se i ponovno postavite dvofaktorsku autentifikaciju. Kontaktirajte administratora stranice ako je ovo bilo neočekivano.');
