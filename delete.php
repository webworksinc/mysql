<?php
include('include/dbconnect.php');
$db = new Database();
$db->connect();
$db->delete('table','conditions');  // Table name, WHERE conditions
$result = $db->getResult();  
print_r($result);
?>
