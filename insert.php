<?php
include('include/dbconnect.php');
$db = new Database();
$db->connect();
$data = $db->escapeString("name@example.com"); // Escape any input before insert
$db->insert('table',array('name'=>'Name','email'=>$data));  // Table name, column names and respective values
$result = $db->getResult();  
print_r($result);
?>
