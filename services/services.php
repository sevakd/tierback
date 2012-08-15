<?php
require_once('PhpConsole.php');
PhpConsole::start();

$mysqli = new mysqli('localhost','cartographer','sourcemap');
if ($mysqli->connect_errno){
    echo "Failed to connect to mysql: ("
    . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
}

mysqli_close($mysqli);

debug('hi');

/*$uppAr = json_decode($_POST['suppObj'], true); //returns json obj as assoc arr

foreach ($uppAr->supplychain->stops as $node){ //iter through stops
    echo "{$node->id}\n";
}

debug('testing');*/
?>
