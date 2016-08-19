//USAGE

//CONNECT / SELECT

include('crud.php');
$db = new Database();
$db->connect();
$db->select('mysqlcrud');
$res = $db->getResult();
print_r($res);



// UPDATE

$db->update('mysqlcrud',array('name'=>'Changed!'),array('id',1));
$db->update('mysqlcrud',array('name'=>'Changed2!'),array('id',2));
$res = $db->getResult();
print_r($res);


