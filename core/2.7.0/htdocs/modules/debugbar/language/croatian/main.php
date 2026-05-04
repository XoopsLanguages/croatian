<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: hr

define('_MD_DEBUGBAR_DEBUG', 'Ispravljanje pogrešaka');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Uključene datoteke');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP verzija');
define('_MD_DEBUGBAR_NONE', 'Ništa');
define('_MD_DEBUGBAR_ERRORS', 'Greške');
define('_MD_DEBUGBAR_DEPRECATED', 'Zastarjelo');
define('_MD_DEBUGBAR_QUERIES', 'Upiti');
define('_MD_DEBUGBAR_BLOCKS', 'Blokovi');
define('_MD_DEBUGBAR_EXTRA', 'Dodatno');
define('_MD_DEBUGBAR_TIMERS', 'Tajmeri');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s je učitan za %s sekundi.');
define('_MD_DEBUGBAR_TOTAL', 'Ukupno');
define('_MD_DEBUGBAR_NOT_CACHED', 'Nije predmemorirano');
define('_MD_DEBUGBAR_CACHED', 'Predmemorirano (osvježava se svakih %s sekundi)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(prazan niz)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool TOČNO');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Upiti baze podataka');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Korištenje memorije');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d upita');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplikati)');
define('_MD_DEBUGBAR_BYTES', '%s bajtova');
define('_MD_DEBUGBAR_DB_VERSION', '%s verzija');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Broj pogreške: %s Poruka pogreške: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Greška #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Iznimka');
define('_MD_DEBUGBAR_RAY_QUERY', 'Upit #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'SPORO');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blokiraj (spremljeno u predmemoriju %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blokiraj (nije predmemorirano)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Izvoz');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Kontekst predloška');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(nema varijabli predloška)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d varijante)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Direktorij "modules/debugbar/%s" nije stvoren');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Nije uspjelo stvaranje direktorija "%s" tijekom kopiranja sredstava');
