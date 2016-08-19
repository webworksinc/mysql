<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->update('table',array('name'=>"Name1",'email'=>"name4@email.com"),'id="1" AND name="Name1"'); // Table name, column names and values, WHERE conditions
$result = $db->getResult();
print_r($result);
?>
