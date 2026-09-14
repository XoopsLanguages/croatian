<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Drugi korak');
define('_US_2FA_PROMPT', 'Unesite kod iz svoje aplikacije za autentifikaciju');
define('_US_2FA_CODE', 'Autentifikacijski kod');
define('_US_2FA_PROMPT_EMAIL', 'Poslali smo šesteroznamenkasti kod na %s. Unesite ga ispod.');
define('_US_2FA_CODE_EMAIL', 'Kod iz vaše e-pošte');
define('_US_2FA_SEND', 'Pošalji novi kod');
define('_US_2FA_SENT', 'Novi kod poslan je na %s. Vrijedi deset minuta.');
define('_US_2FA_SEND_WAIT', 'Kod je poslan prije manje od minute. Provjerite pristiglu poštu i mapu neželjene pošte prije nego zatražite novi.');
define('_US_2FA_SEND_FAILED', 'Kod trenutačno nije moguće poslati. Pokušajte ponovno za trenutak, ili upotrijebite kod za oporavak.');
define('_US_2FA_EMAIL_SUBJECT', '%s: vaš kod za prijavu');
define('_US_2FA_EMAIL_BODY', 'Vaš kod za prijavu za %s je:

%s

Vrijedi %d minuta i djeluje jednokratno. Ako niste zatražili ovo, zanemarite ovu poruku i razmislite o promjeni lozinke.');
define('_US_2FA_RECOVERY', 'Umjesto toga upotrijebi kod za oporavak');
define('_US_2FA_RECOVERY_HINT', 'Svaki kod za oporavak djeluje jednokratno. Njegovom upotrebom šalje vam se e-poruka.');
define('_US_2FA_SUBMIT', 'Nastavi');
define('_US_2FA_STARTAGAIN', 'Ova prijava je istekla ili je prekinuta. Počnite ponovno.');
define('_US_2FA_BACKTOLOGIN', 'Natrag na obrazac za prijavu');
define('_US_2FA_BADCODE', 'Taj kod nije prihvaćen.');
define('_US_2FA_LOCKED', 'Previše pokušaja. Drugi korak zaključan je na petnaest minuta; kod za oporavak i dalje djeluje.');
define('_US_2FA_UNAVAILABLE', 'Drugi korak trenutačno nije dostupan. Kod za oporavak i dalje djeluje, ili kontaktirajte administratora stranice.');
define('_US_2FA_REQUIRED', 'Ovaj račun ima omogućenu dvofaktorsku autentifikaciju. Prijavite se putem stranice za prijavu.');
define('_US_2FA_HTTP_LOGIN', 'Ovaj skočni prozor ne može dovršiti dvofaktorsku prijavu putem HTTP-a jer bi vaša lozinka bila poslana bez šifriranja. Umjesto toga upotrijebite prijavu na stranici, ili zamolite administratora da omogući HTTPS za stranicu.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: drugi korak zaključan');
define('_US_2FA_LOCKED_MAIL_BODY', 'Pet pogrešnih kodova drugog koraka uneseno je za vaš račun na %s s %s. Drugi korak zaključan je na petnaest minuta. Ako to niste bili vi, promijenite lozinku.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: upotrijebljen je kod za oporavak');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Kod za oporavak upotrijebljen je za prijavu na vaš račun na %s s %s. Taj kod više ne djeluje. Ako to niste bili vi, promijenite lozinku i ponovno postavite kodove za oporavak.');
