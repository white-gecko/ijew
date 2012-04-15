<?php
/**
 * Uses following GET variables:
 *   d - denomination (e.g. i, j, e, w)
 *   s - switch (e.g. allday)
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

$d = isset($_GET['d']) ? $_GET['d'] : null;
$s = isset($_GET['s']) ? $_GET['s'] : null;
$m = isset($_GET['m']) ? $_GET['m'] : null;

require_once 'Application.php';

$app = new Application($d, $s, $m);
$app->initDb($dbHost, $dbName, $dbUser, $dbPass);
$app->run();

?>
