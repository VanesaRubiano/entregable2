<?php
function connection(){ 

$host = "localhost";
$db_name = "entregable2";
$user = "root";
$password = "";

$connect = mysqli_connect($host, $user, $password); 

mysqli_select_db($connect, $db_name); 

return $connect; 
}
?>
