<?php 

 
include("connection.php"); 
$con = connection(); 

$id=$_get['id']; 
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$email = $POST['email'];
$password = $POST ['password']

$sql = "UPDATE users SET name='$name',phone_number='$phone_number' email='$email, password='$password WHERE id= '$id'";
$query = mysqli_query($conn, $sql);

if($query){
    header("location: index.php");
}

?> 

