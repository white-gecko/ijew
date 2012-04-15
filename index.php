<?php
/**
 * Uses following GET variables:
 *   d - denomination (e.g. i, j, e, w)
 *   h - holiday (numerical)
 *   m - mode (<none> - view, e - edit, a - add)
 *   o - options (e.g. allday)
 *   f - format (e.g. ics, html)
 */

$dbHost = 'localhost';
$dbName = 'ijew';
$dbUser = 'ijew';
$dbPass = 'GZtWAKbScMESs94U';

define('IJEW_ROOT', rtrim(dirname(__FILE__), '/\\') . '/');

// add libraries to include path
$includePath = get_include_path() . PATH_SEPARATOR;
$includePath .= IJEW_ROOT . 'classes/' . PATH_SEPARATOR;
set_include_path($includePath);
date_default_timezone_set('UTC');

// denomination
$d = isset($_GET['d']) ? $_GET['d'] : null;

// holiday
$h = isset($_GET['h']) ? $_GET['h'] : null;

// mode
$m = isset($_GET['m']) ? $_GET['m'] : null;

// options
$o = isset($_GET['o']) ? $_GET['o'] : null;

// format
$f = isset($_GET['f']) ? $_GET['f'] : null;

require_once 'Application.php';

$app = new Application($d, $h, $m, $o, $f);
$app->initDb($dbHost, $dbName, $dbUser, $dbPass);
$app->run();

?>
