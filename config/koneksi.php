<?php
$dbhost ='localhost';
$dbuser ='root';
$dbpass ='';
$dbname ='tut_ajaxoop';
$db_dsn = "mysql:dbname=$dbname;host=$dbhost";
try {
  $db = new PDO($db_dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
  echo 'Connection failed: '.$e->getMessage();
}
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$base='http://localhost/tutorial/ajaxoop/';
?>
