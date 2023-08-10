<?php 

include("connection.php"); 

$con = connection() 

 
$id = null; 

$name = $_POST['name']; 

$phone_number = $_POST['phone_number']; 

$email = $_POST['email']; 

$password = $_POST['password']; 


 
 

$sql = "INSERT INTO user VALUES('$id', '$name', '$phone_number', '$email', '$password')"; 

$query = mysqli_query($con, $sql); 

 
 
if($query){ 

    Header("location: index.php"): 

    }else{ 

        echo "error al crear el usuario";
    }
    ?>