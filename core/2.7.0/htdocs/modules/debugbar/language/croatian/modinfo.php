<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: hr

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Izvještavanje o greškama i analiza performansi korištenjem PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Prikaži DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Omogući Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Omogući karticu uključenih datoteka');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Prikaži sve PHP datoteke učitane tijekom zahtjeva');
define('_MI_DEBUGBAR_SLOWQUERY', 'Prag sporog upita (sekunde)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Upiti sporiji od ovoga označeni su crvenom bojom (npr. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Bilježenje upita');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Svi upiti prikazani, ili samo spori upiti i greške');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Svi upiti');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Samo spori i greške');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Omogući integraciju Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Pošalji debug podatke u Ray desktop aplikaciju');

define('_MI_DEBUGBAR_ADMENU1', 'Početna');
define('_MI_DEBUGBAR_MENU_ABOUT', 'O modulu');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Natrag na administraciju ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Pregled');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Odricanje od odgovornosti');
\define('_MI_DEBUGBAR_LICENSE', 'Licenca');
\define('_MI_DEBUGBAR_SUPPORT', 'Podrška');
