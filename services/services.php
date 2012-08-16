<?php
require_once('PhpConsole.php');
PhpConsole::start();

$mysqli = new mysqli('localhost','cartographer','sourcemap','tierback');
if ($mysqli->connect_errno){
    echo "Failed to connect to mysql: ("
    . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
}

if (!($stmt = $mysqli->prepare("insert into suppstop (suppchainid, stopid) values (744, 10)"))){
    echo "Prepare failed: (". $mysqli->errno . ")" . $mysqli->error;
}

if(!$stmt->execute()){
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}

/*if (!($res = $stmt->get_result())){
    echo "Getting result set failed: )" . $stmt->errno . ") " . $stmt->error;
}

for($row_no = ($res->num_rows -1); $row_no >= 0; $row_no--){
    $res->data_seek($row_no);
    var_dump($res->fetch_assoc());
}

$res->close();*/

debug('hi');

/*$uppAr = json_decode($_POST['suppObj'], true); //returns json obj as assoc arr

foreach ($uppAr->supplychain->stops as $node){ //iter through stops
    echo "{$node->id}\n";
}*/
?>
