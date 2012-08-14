<?php
require_once('PhpConsole.php');
PhpConsole::start();

$uppAr = json_decode($_POST['suppObj'], true); //returns json obj as assoc arr

foreach ($uppAr->supplychain->stops as $node){ //iter through stops
    echo "{$node->id}\n";
}

debug('testing');
?>
