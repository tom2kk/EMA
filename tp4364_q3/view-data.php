<?php
define('ISITSAFETORUN', TRUE);

error_reporting(E_ALL);
ini_set('display_errors', 1);

$databasename ='walkingclub.sqlite';
$db = new SQLite3($databasename);

echo '<p>Data added to table:</p>';

echo '<pre>';
$results = $db->query("SELECT * FROM walk");
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    var_dump($row);
}
echo '</pre>';

?>
