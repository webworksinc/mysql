<?php
include('include/mysql.php');
$db = new Database();
$db->connect();
$db->select('table','column','join','where','orderby'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$result = $db->getResult();
print_r($result);
?>
