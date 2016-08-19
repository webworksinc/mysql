<?php
include('include/dbconnect.php');
$db = new Database();
$db->connect();
$db->select('table','id,name',NULL,'id=1','id'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions, LIMIT
$result = $db->getResult();
print_r($result);
?>
