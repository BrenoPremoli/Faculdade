<?php

require_once("config_inc.php");
$dsn = "mysql:host=$servername;dbname=$dbname;charset=UTF8";
//$dsn2 = "pgsqp:host=$servername;dbname=$dbname";

$conn = new PDO($dsn, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//unset($conn)

?>
