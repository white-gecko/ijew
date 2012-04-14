<?php
/**
 * Uses following GET variables:
 *   d - denomination (e.g. i, j, e, w)
 *   s - switch (e.g. allday)
 */

require_once 'CalBuilder.php';

$d = isset($_GET['d']) ? $_GET['d'] : null;
$s = isset($_GET['s']) ? $_GET['s'] : null;

$dbHost = 'localhost';
$dbName = 'ijew';
$dbUser = 'ijew';
$dbPwrd = 'GZtWAKbScMESs94U';

date_default_timezone_set('UTC');

$builder = new CalBuilder('j', 734973, 800000);
$builder->build();
$builder->renderIcs();

?>
